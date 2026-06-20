<?php
declare(strict_types=1);

/**
 * WellnessLiving PHP SDK generator.
 *
 * For each path in the OpenAPI spec, generates a dedicated PHP class file with:
 *   - Typed nullable public properties for all request parameters.
 *   - One public method per HTTP verb (get, post, put, patch, delete).
 *   - A private params() helper that collects non-null properties.
 *
 * Also writes WlSdkClient.php, WlSdkException.php, and WlSdkInfo.php into the output directory.
 * All classes live under the WlSdk namespace with PSR-4 directory layout.
 *
 * Usage:
 *   php generate.php                  # generate stable, dev, and production (production skipped if spec not found)
 *   php generate.php stable           # generate stable only
 *   php generate.php dev              # generate dev only
 *   php generate.php production       # generate production (exits 0 with a warning if spec not yet available)
 *
 * Requirements: PHP 8.0+, vendor/autoload.php (run composer install first).
 * The openapi-spec/ directory must exist (git clone wellnessliving/openapi into it).
 */

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

// Relative file paths within the cloned openapi-spec/ directory.
const SPEC_FILES = [
    'stable'     => 'stable/openapi.yaml',
    'dev'        => 'dev/openapi.yaml',
    'production' => 'production/openapi.yaml',
];

const TEMPLATES_DIR = __DIR__ . '/templates';

const OUTPUT_DIRS = [
    'stable' => __DIR__ . '/../stable/src',
    'dev' => __DIR__ . '/../dev/src',
    'production' => __DIR__ . '/../src',
];

const NS_ROOT = 'WlSdk';

// HTTP verbs processed in this order.
const HTTP_VERBS = ['get', 'post', 'put', 'patch', 'delete', 'head', 'options'];

/**
 * Reads the OpenAPI spec file for a channel from the local openapi-spec/ directory.
 *
 * Returns null when the file does not exist, which is expected for channels
 * not yet published (e.g. production).
 *
 * @param string $channel Channel name ('stable', 'dev', or 'production').
 * @return string|null YAML content, or null if the file is absent.
 * @throws \RuntimeException If the file exists but cannot be read.
 */
function wlReadSpec(string $channel): ?string
{
    $path = __DIR__ . '/../openapi-spec/' . SPEC_FILES[$channel];

    if (!file_exists($path)) {
        return null;
    }

    $yaml = file_get_contents($path);
    if ($yaml === false) {
        throw new \RuntimeException("Cannot read spec file: {$path}");
    }

    return $yaml;
}

/**
 * Resolves a local JSON Reference (e.g., '#/components/schemas/Foo') within the spec array.
 *
 * @param array $spec Full OpenAPI spec.
 * @param string $ref Reference string starting with '#/'.
 * @return array Resolved schema node, or an empty array if not found.
 */
function wlResolveRef(array $spec, string $ref): array
{
    if (strncmp($ref, '#/', 2) !== 0) {
        return [];
    }

    $parts = explode('/', substr($ref, 2));
    $node = $spec;

    foreach ($parts as $part) {
        $part = str_replace(['~1', '~0'], ['/', '~'], $part);
        if (!is_array($node) || !array_key_exists($part, $node)) {
            return [];
        }
        $node = $node[$part];
    }

    return is_array($node) ? $node : [];
}

/**
 * Converts an OpenAPI schema to a PHP type string suitable for a nullable property declaration.
 *
 * For example, an OpenAPI 'integer' becomes 'int', and the caller wraps it as '?int'.
 * Returns null if the type cannot be mapped to a scalar PHP type (use untyped in that case).
 *
 * @param array $spec Full OpenAPI spec.
 * @param array $schema OpenAPI schema object.
 * @param int $depth Recursion guard.
 * @return string|null PHP type string without leading '?', or null for unknown/complex types.
 */
function wlSchemaToPhpType(array $spec, array $schema, int $depth = 0): ?string
{
    if ($depth > 4) {
        return null;
    }

    if (isset($schema['$ref'])) {
        $resolved = wlResolveRef($spec, $schema['$ref']);
        return $resolved ? wlSchemaToPhpType($spec, $resolved, $depth + 1) : null;
    }

    if (isset($schema['allOf']) || isset($schema['oneOf']) || isset($schema['anyOf'])) {
        return null;
    }

    $type = $schema['type'] ?? null;

    // OpenAPI 3.1 allows type to be an array: ['string', 'null'] instead of
    // type: string + nullable: true. Extract the first non-null type.
    if (is_array($type)) {
        $nonNull = array_values(array_filter($type, fn($t) => $t !== 'null'));
        $type = $nonNull[0] ?? null;
    }

    $map = [
        'string' => 'string',
        'integer' => 'int',
        'number' => 'float',
        'boolean' => 'bool',
        'array' => 'array',
        'object' => 'array',
    ];

    return isset($type) ? ($map[$type] ?? null) : null;
}

/**
 * Returns a PHPDoc type string for an OpenAPI schema (used in @var tags).
 *
 * Differs from wlSchemaToPhpType: always returns a string, uses 'mixed' as fallback,
 * and preserves array item types (e.g., 'string[]').
 *
 * @param array $spec Full OpenAPI spec.
 * @param array $schema OpenAPI schema object.
 * @param int $depth Recursion guard.
 * @return string PHPDoc type string.
 */
function wlSchemaToDocType(array $spec, array $schema, int $depth = 0): string
{
    if ($depth > 4) {
        return 'mixed';
    }

    if (isset($schema['$ref'])) {
        $resolved = wlResolveRef($spec, $schema['$ref']);
        if ($resolved && isset($resolved['enum']) && isset($resolved['x-enum-varnames'])) {
            $parts = explode('/', $schema['$ref']);
            return wlEnumSchemaToClassRef(end($parts));
        }
        return $resolved ? wlSchemaToDocType($spec, $resolved, $depth + 1) : 'mixed';
    }

    if (isset($schema['oneOf']) || isset($schema['anyOf'])) {
        $variants = $schema['oneOf'] ?? $schema['anyOf'];
        $types = array_unique(array_map(
            fn(array $s) => wlSchemaToDocType($spec, $s, $depth + 1),
            $variants
        ));
        return implode('|', $types);
    }

    $type = $schema['type'] ?? null;

    // OpenAPI 3.1 allows type to be an array: ['string', 'null'] instead of
    // type: string + nullable: true. Extract the first non-null type.
    if (is_array($type)) {
        $nonNull = array_values(array_filter($type, fn($t) => $t !== 'null'));
        $type = $nonNull[0] ?? null;
    }

    if ($type === 'array' && isset($schema['items'])) {
        return wlSchemaToDocType($spec, $schema['items'], $depth + 1) . '[]';
    }

    $map = [
        'string' => 'string',
        'integer' => 'int',
        'number' => 'float',
        'boolean' => 'bool',
        'array' => 'array',
        'object' => 'array',
    ];

    return isset($type) ? ($map[$type] ?? 'mixed') : 'mixed';
}

/**
 * Converts a dot-notation OpenAPI schema name to a fully-qualified PHP class reference.
 *
 * A plain name like 'ADateWeekSid' becomes '\WlSdk\ADateWeekSid'.
 * A dotted name like 'Wl.Mode.ModeSid' becomes '\WlSdk\Wl\Mode\ModeSid'.
 *
 * @param string $schemaName Raw schema name from components/schemas.
 * @return string Fully-qualified PHP class reference (with leading backslash).
 */
function wlEnumSchemaToClassRef(string $schemaName): string
{
    return '\\' . NS_ROOT . '\\' . str_replace('.', '\\', $schemaName);
}

/**
 * Replaces OpenAPI markdown schema links with PHPDoc {@link} references.
 *
 * Converts '[Name](#/components/schemas/Wl.Mode.ModeSid)' to
 * '{@link \WlSdk\Wl\Mode\ModeSid}'.
 *
 * @param string $text Description text from the OpenAPI spec.
 * @return string Text with markdown schema links replaced by PHPDoc links.
 */
function wlConvertDescriptionLinks(string $text): string
{
    return preg_replace_callback(
        '/\[[^\]]*\]\(#\/components\/schemas\/([^)]+)\)/',
        static function(array $m): string
        {
            return '{@link ' . wlEnumSchemaToClassRef($m[1]) . '}';
        },
        $text
    ) ?? $text;
}

/**
 * Returns the schema name if the schema is a $ref to an enum, null otherwise.
 *
 * @param array $spec Full OpenAPI spec.
 * @param array $schema OpenAPI schema object.
 * @return string|null Raw schema name (e.g., 'ADateWeekSid' or 'Wl.Mode.ModeSid'), or null.
 */
function wlGetEnumSchemaName(array $spec, array $schema): ?string
{
    if (!isset($schema['$ref'])) {
        return null;
    }
    $resolved = wlResolveRef($spec, $schema['$ref']);
    if (!$resolved || !isset($resolved['enum']) || !isset($resolved['x-enum-varnames'])) {
        return null;
    }
    $parts = explode('/', $schema['$ref']);
    return end($parts);
}

/**
 * Converts a field name to PascalCase, stripping the type prefix.
 *
 * For example: 'a_access_log' becomes 'AccessLog', 'text_activity' becomes 'Activity'.
 * Fields without a known prefix are converted as-is: 'foo_bar' becomes 'FooBar'.
 *
 * @param string $fieldName Field name with type prefix (e.g., 'a_access_log').
 * @return string PascalCase name without type prefix (e.g., 'AccessLog').
 */
function wlFieldNameToPascalCase(string $fieldName): string
{
    // Longer prefixes first to avoid partial matches (e.g., 'dtu_' before 'd_').
    $prefixes = ['dtu_', 'dtl_', 'dl_', 'uid_', 'url_', 'xml_', 'html_', 'text_', 'jq_', 'id_', 'a_', 'b_', 'i_', 'm_', 'k_', 'o_', 's_'];
    foreach ($prefixes as $prefix) {
        if (strncmp($fieldName, $prefix, strlen($prefix)) === 0) {
            $fieldName = substr($fieldName, strlen($prefix));
            break;
        }
    }
    return str_replace('_', '', ucwords($fieldName, '_'));
}

/**
 * Builds a PHPDoc block for a single response property.
 *
 * @param string $desc Human-readable description of the property.
 * @param string $docType Full PHPDoc type string including nullability (e.g., 'string[]|null').
 * @return string PHPDoc block with trailing newline, ready to place before the property declaration.
 */
function wlBuildPropertyDoc(string $desc, string $docType): string
{
    $code = "    /**\n";
    foreach (explode("\n", wordwrap($desc, 108, "\n")) as $l) {
        $code .= "     * {$l}\n";
    }
    $code .= "     *\n";
    $code .= "     * @var {$docType}\n";
    $code .= "     */\n";
    return $code;
}

/**
 * Builds the file descriptor for a response sub-class.
 *
 * @param string $namespace PHP namespace.
 * @param string $relDir Relative directory (e.g., 'Core/Request'), empty string for root.
 * @param string $className Simple class name.
 * @param string $propsCode Property declarations block.
 * @param string $constructorBody Constructor body statements.
 * @return array{file: string, content: string} Generated file descriptor.
 */
function wlMakeResponseSubClass(
    string $namespace,
    string $relDir,
    string $className,
    string $propsCode,
    string $constructorBody
): array {
    $relFile = ($relDir ? $relDir . '/' : '') . $className . '.php';
    $content = "<?php\n"
        . "namespace {$namespace};\n\n"
        . "class {$className}\n"
        . "{\n"
        . $propsCode
        . "    public function __construct(array \$data)\n"
        . "    {\n"
        . ($constructorBody !== '' ? $constructorBody : "        // Empty.\n")
        . "    }\n"
        . "}\n";
    return ['file' => $relFile, 'content' => $content];
}

/**
 * Builds property declarations and constructor assignments for a set of OpenAPI properties.
 *
 * Generates sub-classes for nested object and array-of-object properties, returning them as
 * extra file descriptors. Three cases are handled:
 *   - `type: object` with `properties` - generates one sub-class named `{parentClass}{FieldPascal}`.
 *   - `type: array` with `items.type: object` - generates one sub-class for the item type.
 *   - `type: array` with `items.oneOf` - generates one sub-class per object variant (suffixed A, B,
 *      or the last segment of a `$ref` name). Non-object variants use raw PHPDoc types.
 *
 * @param array $spec Full OpenAPI spec.
 * @param array $properties OpenAPI properties map (name => schema).
 * @param string $namespace PHP namespace for generated sub-classes.
 * @param string $relDir Relative directory for sub-class files.
 * @param string $parentClassName Parent class name used as prefix for sub-class names.
 * @return array{string, string, array<array{file: string, content: string}>}
 *  Property declarations code, constructor body, and extra sub-class file descriptors.
 */
function wlBuildResponseProperties(
    array $spec,
    array $properties,
    string $namespace,
    string $relDir,
    string $parentClassName
): array {
    $castMap = ['string' => '(string)', 'int' => '(int)', 'float' => '(float)', 'bool' => '(bool)', 'array' => '(array)'];

    $propsCode = '';
    $constructorBody = '';
    $extraFiles = [];

    foreach ($properties as $propName => $propSchema) {
        // Preserve a caller-level description before resolving $ref (OpenAPI allows overriding).
        $overrideDesc = $propSchema['description'] ?? null;
        if (isset($propSchema['$ref'])) {
            $resolved = wlResolveRef($spec, $propSchema['$ref']);
            if ($resolved) {
                $propSchema = $resolved;
                if ($overrideDesc !== null) {
                    $propSchema['description'] = $overrideDesc;
                }
            }
        }

        $rawDesc = wlConvertDescriptionLinks(trim($propSchema['description'] ?? ''));
        $schemaType = $propSchema['type'] ?? null;
        if (is_array($schemaType)) {
            $nonNull = array_values(array_filter($schemaType, fn($t) => $t !== 'null'));
            $schemaType = $nonNull[0] ?? null;
        }
        $fieldPascal = wlFieldNameToPascalCase($propName);

        // Case 1: type: object with properties -> generate a single sub-class.
        if ($schemaType === 'object' && !empty($propSchema['properties'])) {
            $subClassName = $parentClassName . $fieldPascal;
            [$subPropsCode, $subConstructorBody, $subExtra] = wlBuildResponseProperties(
                $spec, $propSchema['properties'], $namespace, $relDir, $subClassName
            );
            $extraFiles[] = wlMakeResponseSubClass($namespace, $relDir, $subClassName, $subPropsCode, $subConstructorBody);
            array_push($extraFiles, ...$subExtra);

            $propsCode .= wlBuildPropertyDoc($rawDesc ?: 'No description.', $subClassName . '|null')
                . "    public ?{$subClassName} \${$propName} = null;\n\n";
            $constructorBody .= "        \$this->{$propName} = isset(\$data['{$propName}'])"
                . " ? new {$subClassName}((array)\$data['{$propName}']) : null;\n";
            continue;
        }

        // Case 2: type: array with items.
        if ($schemaType === 'array' && isset($propSchema['items'])) {
            $items = $propSchema['items'];

            // Case 2a: items.oneOf -> one sub-class per object variant.
            if (isset($items['oneOf'])) {
                $docTypes = [];
                $objectIdx = 0;
                foreach ($items['oneOf'] as $variant) {
                    $resolvedVariant = isset($variant['$ref'])
                        ? (wlResolveRef($spec, $variant['$ref']) ?: $variant)
                        : $variant;
                    $variantType = $resolvedVariant['type'] ?? null;
                    if ($variantType === 'object' && !empty($resolvedVariant['properties'])) {
                        if (isset($variant['$ref'])) {
                            $refParts = explode('/', $variant['$ref']);
                            $refNameParts = explode('.', end($refParts));
                            $suffix = end($refNameParts);
                        } else {
                            $suffix = $objectIdx < 26 ? chr(ord('A') + $objectIdx) : (string)$objectIdx;
                        }
                        $objectIdx++;
                        $subClassName = $parentClassName . $fieldPascal . $suffix;
                        [$subPropsCode, $subConstructorBody, $subExtra] = wlBuildResponseProperties(
                            $spec, $resolvedVariant['properties'], $namespace, $relDir, $subClassName
                        );
                        $extraFiles[] = wlMakeResponseSubClass($namespace, $relDir, $subClassName, $subPropsCode, $subConstructorBody);
                        array_push($extraFiles, ...$subExtra);
                        $docTypes[] = $subClassName . '[]';
                    } else {
                        $docTypes[] = wlSchemaToDocType($spec, $variant) . '[]';
                    }
                }
                $propsCode .= wlBuildPropertyDoc($rawDesc ?: 'No description.', implode('|', array_unique($docTypes)) . '|null')
                    . "    public ?array \${$propName} = null;\n\n";
                // Cannot auto-instantiate without a discriminator; keep as plain array.
                $constructorBody .= "        \$this->{$propName} = \$data['{$propName}'] ?? null;\n";
                continue;
            }

            // Case 2b: items is an object with properties -> generate a sub-class for the item type.
            $resolvedItems = isset($items['$ref']) ? (wlResolveRef($spec, $items['$ref']) ?: $items) : $items;
            $itemType = $resolvedItems['type'] ?? null;
            if ($itemType === 'object' && !empty($resolvedItems['properties'])) {
                $subClassName = $parentClassName . $fieldPascal;
                [$subPropsCode, $subConstructorBody, $subExtra] = wlBuildResponseProperties(
                    $spec, $resolvedItems['properties'], $namespace, $relDir, $subClassName
                );
                $extraFiles[] = wlMakeResponseSubClass($namespace, $relDir, $subClassName, $subPropsCode, $subConstructorBody);
                array_push($extraFiles, ...$subExtra);

                $propsCode .= wlBuildPropertyDoc($rawDesc ?: 'No description.', $subClassName . '[]|null')
                    . "    public ?array \${$propName} = null;\n\n";
                $constructorBody .= "        \$this->{$propName} = isset(\$data['{$propName}'])"
                    . " ? array_map(static fn(\$item) => new {$subClassName}((array)\$item), (array)\$data['{$propName}']) : null;\n";
                continue;
            }
        }

        // Default: scalar or unresolvable type.
        $phpType = wlSchemaToPhpType($spec, $propSchema);
        $docType = wlSchemaToDocType($spec, $propSchema);
        $propsCode .= wlBuildPropertyDoc($rawDesc ?: 'No description.', $docType . '|null');
        if ($phpType !== null) {
            $propsCode .= "    public ?{$phpType} \${$propName} = null;\n\n";
            $cast = $castMap[$phpType] ?? '';
            $constructorBody .= "        \$this->{$propName} = isset(\$data['{$propName}'])"
                . " ? {$cast}\$data['{$propName}'] : null;\n";
        } else {
            $propsCode .= "    public \${$propName} = null;\n\n";
            $constructorBody .= "        \$this->{$propName} = \$data['{$propName}'] ?? null;\n";
        }
    }

    return [$propsCode, $constructorBody, $extraFiles];
}

/**
 * Recursively deletes a directory and all its contents.
 *
 * Does nothing if the directory does not exist.
 *
 * @param string $dir Absolute path to the directory.
 */
function wlRmDir(string $dir): void
{
    if (!is_dir($dir)) {
        return;
    }
    $items = new \RecursiveIteratorIterator(
        new \RecursiveDirectoryIterator($dir, \FilesystemIterator::SKIP_DOTS),
        \RecursiveIteratorIterator::CHILD_FIRST
    );
    foreach ($items as $item) {
        $item->isDir() ? rmdir($item->getRealPath()) : unlink($item->getRealPath());
    }
    rmdir($dir);
}

/**
 * Writes a file to disk, creating intermediate directories as needed.
 *
 * @param string $filePath Absolute path to the target file.
 * @param string $content File content.
 * @throws \RuntimeException On write failure.
 */
function wlWriteFile(string $filePath, string $content): void
{
    $dir = dirname($filePath);
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    if (file_put_contents($filePath, $content) === false) {
        throw new \RuntimeException('Cannot write: ' . $filePath);
    }
}

/**
 * Reads all unique parameters for a given path by merging across all HTTP operations.
 *
 * When the same parameter name appears in multiple operations, the first occurrence wins.
 *
 * @param array $spec Full OpenAPI spec.
 * @param array $operations Map of HTTP verb -> operation object.
 * @return array[] Keyed by parameter name; each entry: [phpType, docType, description, required].
 */
function wlCollectParams(array $spec, array $operations): array
{
    $params = [];

    foreach ($operations as $operation) {
        // Query and path parameters (header parameters are skipped — they are
        // transport-level concerns and often contain hyphens, which are invalid PHP identifiers).
        foreach ($operation['parameters'] ?? [] as $param) {
            if (isset($param['$ref'])) {
                $param = wlResolveRef($spec, $param['$ref']);
            }
            $name = $param['name'] ?? null;
            $in = $param['in'] ?? '';
            if (!$name || $in === 'header' || isset($params[$name])) {
                continue;
            }
            $schema = $param['schema'] ?? [];
            $params[$name] = [
                'phpType' => wlSchemaToPhpType($spec, $schema),
                'docType' => wlSchemaToDocType($spec, $schema),
                'description' => wlConvertDescriptionLinks(trim($param['description'] ?? '')),
                'enumClass' => wlGetEnumSchemaName($spec, $schema),
                'required' => !empty($param['required']),
            ];
        }

        // Request body properties.
        if (!isset($operation['requestBody'])) {
            continue;
        }
        $content = $operation['requestBody']['content'] ?? [];
        $bodySchema = $content['application/x-www-form-urlencoded']['schema']
            ?? $content['application/json']['schema']
            ?? null;
        if ($bodySchema === null) {
            continue;
        }
        if (isset($bodySchema['$ref'])) {
            $bodySchema = wlResolveRef($spec, $bodySchema['$ref']);
        }
        $requiredFields = $bodySchema['required'] ?? [];
        foreach ($bodySchema['properties'] ?? [] as $propName => $propSchema) {
            if (isset($params[$propName])) {
                continue;
            }
            $params[$propName] = [
                'phpType' => wlSchemaToPhpType($spec, $propSchema),
                'docType' => wlSchemaToDocType($spec, $propSchema),
                'description' => wlConvertDescriptionLinks(trim($propSchema['description'] ?? '')),
                'enumClass' => wlGetEnumSchemaName($spec, $propSchema),
                'required' => in_array($propName, $requiredFields, true),
            ];
        }
    }

    return $params;
}

/**
 * Builds a PHPDoc comment for a single HTTP verb method.
 *
 * @param array $spec Full OpenAPI spec.
 * @param array $operation OpenAPI operation object.
 * @param string $verb HTTP verb (lowercase).
 * @param string $path API path string.
 * @return string PHPDoc block (indented 4 spaces, ready to place before the method).
 */
function wlBuildVerbDoc(array $spec, array $operation, string $verb, string $path, string $responseClassName): string
{
    $L = '     * ';  // doc line prefix (4-space class body + ' * ')
    $E = '     *';   // empty doc line prefix

    $lines = [];

    $summary = wlConvertDescriptionLinks(trim($operation['summary'] ?? ''));
    $description = wlConvertDescriptionLinks(trim($operation['description'] ?? ''));

    if ($summary !== '') {
        $lines[] = $L . $summary;
        if ($description !== '') {
            $lines[] = $E;
            foreach (explode("\n", wordwrap($description, 108, "\n")) as $l) {
                $lines[] = $L . $l;
            }
        }
    } elseif ($description !== '') {
        foreach (explode("\n", wordwrap($description, 108, "\n")) as $l) {
            $lines[] = $L . $l;
        }
    } else {
        $lines[] = $L . 'Calls ' . strtoupper($verb) . ' ' . $path . '.';
    }

    if (!empty($operation['deprecated'])) {
        $deprecatedMsg = trim($operation['x-deprecated'] ?? '');
        $lines[] = $E;
        $lines[] = $L . '@deprecated' . ($deprecatedMsg !== '' ? ' ' . $deprecatedMsg : '');
    }

    $lines[] = $E;
    $lines[] = $L . '@return ' . $responseClassName;
    $lines[] = $L . '@throws \\WlSdk\\WlSdkException On non-2xx HTTP response.';
    $lines[] = $L . '@throws \\RuntimeException On network or cURL error.';

    return "    /**\n" . implode("\n", $lines) . "\n     */\n";
}

/**
 * Generates typed response class(es) for one HTTP verb on a given endpoint.
 *
 * Returns the main response class plus any auto-generated sub-classes for nested object
 * properties (see {@link wlBuildResponseProperties()} for the three handled cases).
 * Properties are nullable so the class handles missing fields in partial responses gracefully.
 *
 * @param array $spec Full OpenAPI spec.
 * @param string $verb HTTP verb (lowercase).
 * @param array $operation OpenAPI operation object.
 * @param string $namespace PHP namespace (e.g., 'WlSdk\Core\Request').
 * @param string $responseClassName Simple class name (e.g., 'ExampleGetResponse').
 * @param string $relDir Relative directory (e.g., 'Core/Request'), empty string for root.
 * @return array<array{file: string, content: string}> Main response class file plus any sub-class files.
 */
function wlGenerateResponseClass(
    array $spec,
    string $verb,
    array $operation,
    string $namespace,
    string $responseClassName,
    string $relDir
): array {
    $responses = $operation['responses'] ?? [];
    $successSchema = null;
    foreach (['200', '201'] as $code) {
        if (!isset($responses[$code])) {
            continue;
        }
        $content = $responses[$code]['content'] ?? [];
        $successSchema = $content['application/json']['schema'] ?? null;
        if ($successSchema !== null) {
            break;
        }
    }

    if ($successSchema !== null && isset($successSchema['$ref'])) {
        $successSchema = wlResolveRef($spec, $successSchema['$ref']);
    }

    $properties = ($successSchema !== null) ? ($successSchema['properties'] ?? []) : [];

    [$propsCode, $constructorBody, $extraFiles] = wlBuildResponseProperties(
        $spec, $properties, $namespace, $relDir, $responseClassName
    );

    $relFile = ($relDir ? $relDir . '/' : '') . $responseClassName . '.php';

    $content = "<?php\n"
        . "namespace {$namespace};\n\n"
        . "/**\n"
        . " * Response from " . strtoupper($verb) . "\n"
        . " */\n"
        . "class {$responseClassName}\n"
        . "{\n"
        . $propsCode
        . "    public function __construct(array \$data)\n"
        . "    {\n"
        . ($constructorBody !== '' ? $constructorBody : "        // Empty response.\n")
        . "    }\n"
        . "}\n";

    return array_merge([['file' => $relFile, 'content' => $content]], $extraFiles);
}

/**
 * Generates a request class for one HTTP verb on a given endpoint.
 *
 * @param array $params Parameter map from wlCollectParams().
 * @param string $namespace PHP namespace (e.g., 'WlSdk\Core\Request').
 * @param string $requestClassName Simple class name (e.g., 'ExampleGetRequest').
 * @param string $relDir Relative directory (e.g., 'Core/Request'), empty string for root.
 * @return array{file: string, content: string} Generated file descriptor.
 */
function wlGenerateRequestClass(
    array $params,
    string $namespace,
    string $requestClassName,
    string $relDir
): array {
    $propsCode = '';
    foreach ($params as $name => $info) {
        $docType = $info['docType'] . '|null';
        $rawDesc = $info['description'] ?: 'No description.';
        $propsCode .= "    /**\n";
        foreach (explode("\n", wordwrap($rawDesc, 108, "\n")) as $descLine) {
            $propsCode .= "     * {$descLine}\n";
        }
        $propsCode .= "     *\n";
        $propsCode .= "     * @var {$docType}\n";
        $propsCode .= "     */\n";
        if ($info['enumClass'] !== null) {
            $enumRef = wlEnumSchemaToClassRef($info['enumClass']);
            $propsCode .= "    public ?{$enumRef} \${$name} = null;\n\n";
        } elseif ($info['phpType'] !== null) {
            $propsCode .= "    public ?{$info['phpType']} \${$name} = null;\n\n";
        } else {
            $propsCode .= "    public \${$name} = null;\n\n";
        }
    }

    $paramsEntries = '';
    foreach ($params as $name => $info) {
        if ($info['enumClass'] !== null) {
            $paramsEntries .= "            '{$name}' => \$this->{$name}?->value,\n";
        } else {
            $paramsEntries .= "            '{$name}' => \$this->{$name},\n";
        }
    }
    if ($paramsEntries !== '') {
        $paramsMethod = "    public function params(): array\n"
            . "    {\n"
            . "        return array_filter(\n"
            . "            [\n"
            . $paramsEntries
            . "            ],\n"
            . "            static fn(\$v) => \$v !== null\n"
            . "        );\n"
            . "    }\n";
    } else {
        $paramsMethod = "    public function params(): array\n"
            . "    {\n"
            . "        return [];\n"
            . "    }\n";
    }

    $relFile = ($relDir ? $relDir . '/' : '') . $requestClassName . '.php';

    $content = "<?php\n"
        . "namespace {$namespace};\n\n"
        . "class {$requestClassName}\n"
        . "{\n"
        . $propsCode
        . $paramsMethod
        . "}\n";

    return ['file' => $relFile, 'content' => $content];
}

/**
 * Generates the endpoint class for all HTTP verbs on a given path.
 *
 * Produces one class with one method per verb. Each method accepts a typed
 * request object and returns a typed response object.
 *
 * @param array $spec Full OpenAPI spec.
 * @param string $path OpenAPI path string (e.g., '/Core/Request/Example.json').
 * @param string $namespace PHP namespace (e.g., 'WlSdk\Core\Request').
 * @param string $endpointClassName Simple class name (e.g., 'Example').
 * @param array $operations Map of HTTP verb (lowercase) to OpenAPI operation object.
 * @param string $relDir Relative directory (e.g., 'Core/Request'), empty string for root.
 * @return array{file: string, content: string} Generated file descriptor.
 */
function wlGenerateEndpointClass(
    array $spec,
    string $path,
    string $namespace,
    string $endpointClassName,
    array $operations,
    string $relDir
): array {
    $useStatement = ($namespace !== NS_ROOT)
        ? "use WlSdk\\WlSdkClient;\n\n"
        : '';

    $firstOp = reset($operations);
    $classSummary = trim($firstOp['summary'] ?? $firstOp['description'] ?? '');
    if ($classSummary === '') {
        $classSummary = 'API endpoint: ' . $path;
    }
    $classDocLines = [];
    foreach (explode("\n", wordwrap($classSummary, 116, "\n")) as $l) {
        $classDocLines[] = ' * ' . $l;
    }
    $classDoc = "/**\n" . implode("\n", $classDocLines) . "\n */\n";

    $escapedPath = addslashes($path);
    $verbsCode = '';
    foreach ($operations as $verb => $operation) {
        $ucVerb = ucfirst($verb);
        $requestClass = $endpointClassName . $ucVerb . 'Request';
        $responseClass = $endpointClassName . $ucVerb . 'Response';
        $phpVerb = strtoupper($verb);
        $doc = wlBuildVerbDoc($spec, $operation, $verb, $path, $responseClass);
        $verbsCode .= $doc
            . "    public function {$verb}({$requestClass} \$request): {$responseClass}\n"
            . "    {\n"
            . "        return new {$responseClass}(\$this->client->request('{$escapedPath}', \$request->params(), '{$phpVerb}'));\n"
            . "    }\n\n";
    }

    $relFile = ($relDir ? $relDir . '/' : '') . $endpointClassName . '.php';

    $content = "<?php\n"
        . "namespace {$namespace};\n\n"
        . $useStatement
        . $classDoc
        . "class {$endpointClassName}\n"
        . "{\n"
        . "    /** @var WlSdkClient */\n"
        . "    private \$client;\n\n"
        . "    public function __construct(WlSdkClient \$client)\n"
        . "    {\n"
        . "        \$this->client = \$client;\n"
        . "    }\n\n"
        . rtrim($verbsCode) . "\n"
        . "}\n";

    return ['file' => $relFile, 'content' => $content];
}

/**
 * Generates all PHP source files for one API endpoint path.
 *
 * Produces one endpoint class with all HTTP verb methods, plus a request class
 * and a response class per verb (e.g. ExampleGetRequest, ExampleGetResponse).
 *
 * @param array $spec Full OpenAPI spec.
 * @param string $path OpenAPI path (e.g., '/Core/Request/Example.json').
 * @param array $pathItem OpenAPI path item object (contains HTTP verb keys).
 * @return array<array{file: string, content: string}> List of generated files.
 */
function wlGenerateApiClass(array $spec, string $path, array $pathItem): array
{
    $operations = [];
    foreach (HTTP_VERBS as $verb) {
        if (isset($pathItem[$verb]) && is_array($pathItem[$verb])) {
            $operations[$verb] = $pathItem[$verb];
        }
    }
    if (empty($operations)) {
        return [];
    }

    $stripped = (string)preg_replace('/\.json$/i', '', ltrim($path, '/'));
    $segments = explode('/', $stripped);
    $classBaseName = array_pop($segments);
    $relNs = implode('\\', $segments);
    $namespace = NS_ROOT . ($relNs ? '\\' . $relNs : '');
    $relDir = $segments ? implode('/', $segments) : '';

    $files = [];

    foreach ($operations as $verb => $operation) {
        $ucVerb = ucfirst($verb);
        $requestClass = $classBaseName . $ucVerb . 'Request';
        $responseClass = $classBaseName . $ucVerb . 'Response';

        $verbParams = wlCollectParams($spec, [$verb => $operation]);

        $files[] = wlGenerateRequestClass($verbParams, $namespace, $requestClass, $relDir);
        array_push($files, ...wlGenerateResponseClass($spec, $verb, $operation, $namespace, $responseClass, $relDir));
    }

    $files[] = wlGenerateEndpointClass($spec, $path, $namespace, $classBaseName, $operations, $relDir);

    return $files;
}

/**
 * Generates a PHP 8.1 backed enum class from an OpenAPI schema definition.
 *
 * Returns null if the schema is not an enum or lacks x-enum-varnames.
 *
 * @param string $schemaName Schema name from components/schemas (becomes the class name).
 * @param array $schema OpenAPI schema object.
 * @return array{file: string, content: string}|null Generated file descriptor, or null.
 */
function wlGenerateEnumClass(string $schemaName, array $schema): ?array
{
    if (!isset($schema['enum']) || !isset($schema['x-enum-varnames'])) {
        return null;
    }

    // 'Wl.Mode.ModeSid' -> namespace WlSdk\Wl\Mode, class ModeSid, file Wl/Mode/ModeSid.php
    $nameParts = explode('.', $schemaName);
    $className = array_pop($nameParts);
    $namespace = NS_ROOT . ($nameParts ? '\\' . implode('\\', $nameParts) : '');
    $relFile = ($nameParts ? implode('/', $nameParts) . '/' : '') . $className . '.php';

    $type = $schema['type'] ?? 'integer';
    $phpType = ($type === 'string') ? 'string' : 'int';

    $values = $schema['enum'];
    $varnames = $schema['x-enum-varnames'];
    $descriptions = $schema['x-enum-description'] ?? [];
    $classDesc = trim($schema['description'] ?? '');

    $classDocLines = [];
    foreach (explode("\n", wordwrap($classDesc ?: $className . ' constants.', 116, "\n")) as $l) {
        $classDocLines[] = ' * ' . $l;
    }
    $classDoc = "/**\n" . implode("\n", $classDocLines) . "\n */\n";

    $casesCode = '';
    foreach ($values as $i => $value) {
        $caseName = $varnames[$i] ?? ('VALUE_' . $i);
        $caseDesc = trim((string)($descriptions[$i] ?? ''));
        if ($caseDesc !== '') {
            $casesCode .= "    /** {$caseDesc} */\n";
        }
        $caseValue = ($phpType === 'string') ? "'" . addslashes((string)$value) . "'" : (string)(int)$value;
        $casesCode .= "    case {$caseName} = {$caseValue};\n";
    }

    $content = "<?php\n"
        . "namespace {$namespace};\n\n"
        . $classDoc
        . "enum {$className}: {$phpType}\n"
        . "{\n"
        . $casesCode
        . "}\n";

    return ['file' => $relFile, 'content' => $content];
}

/**
 * Reads the OpenAPI spec, generates all API classes, and writes them to disk.
 *
 * @param string $channel 'stable', 'dev', or 'production'.
 * @param bool $optional When `true`, a missing spec file prints a warning and returns
 *  without error. Used for channels not yet published (e.g. production).
 * @throws \RuntimeException On read, parse, or write failure.
 */
function wlGenerateSdk(string $channel, bool $optional = false): void
{
    echo "Generating PHP SDK ({$channel})...\n";

    $outputDir = OUTPUT_DIRS[$channel];
    $specFile = __DIR__ . '/../openapi-spec/' . SPEC_FILES[$channel];

    echo "  Reading spec from {$specFile}...\n";

    $yaml = wlReadSpec($channel);
    if ($yaml === null) {
        if ($optional) {
            echo "  Spec file not found - skipping {$channel} channel.\n";
            return;
        }
        throw new \RuntimeException("Spec file not found: {$specFile}");
    }

    // Wipe the output directory so removed endpoints don't leave stale files.
    wlRmDir($outputDir);
    echo "  Cleared {$outputDir}/\n";

    $spec = Yaml::parse($yaml);

    $version = $spec['info']['version'] ?? 'unknown';
    echo "  Spec version: {$version}\n";

    // Write static base classes (client + exception).
    foreach (['WlSdkClient.php', 'WlSdkException.php'] as $file) {
        $src = file_get_contents(TEMPLATES_DIR . '/' . $file);
        if ($src === false) {
            throw new \RuntimeException('Cannot read template: ' . $file);
        }
        wlWriteFile($outputDir . '/' . $file, $src);
    }

    // Write metadata class (WlSdkInfo.php) with channel-specific constants.
    $infoTpl = file_get_contents(TEMPLATES_DIR . '/WlSdkInfo.php.tpl');
    if ($infoTpl === false) {
        throw new \RuntimeException('Cannot read template: WlSdkInfo.php.tpl');
    }

    // Generate all API and response classes first to get the final count.
    $files = [];
    $apiCount = 0;
    foreach ($spec['paths'] ?? [] as $path => $pathItem) {
        if (!is_array($pathItem)) {
            continue;
        }
        $generated = wlGenerateApiClass($spec, $path, $pathItem);
        if (!empty($generated)) {
            $apiCount++;
            foreach ($generated as $file) {
                $files[] = $file;
            }
        }
    }
    echo "  Generated {$apiCount} API classes (" . count($files) . " files total).\n";

    // Write WlSdkInfo.php now that we have the final count.
    $infoContent = str_replace(
        ['{{CHANNEL}}', '{{SPEC_VERSION}}', '{{BUILD_DATE}}', '{{ENDPOINT_COUNT}}'],
        [$channel, $version, date('Y-m-d'), (string)$apiCount],
        $infoTpl
    );
    wlWriteFile($outputDir . '/WlSdkInfo.php', $infoContent);

    // Write all generated files (endpoint, request, response classes).
    foreach ($files as $file) {
        wlWriteFile($outputDir . '/' . $file['file'], $file['content']);
    }

    // Generate PHP 8.1 backed enum classes from components/schemas.
    $enumCount = 0;
    foreach ($spec['components']['schemas'] ?? [] as $schemaName => $schema) {
        if (!is_array($schema)) {
            continue;
        }
        $enumFile = wlGenerateEnumClass($schemaName, $schema);
        if ($enumFile !== null) {
            wlWriteFile($outputDir . '/' . $enumFile['file'], $enumFile['content']);
            $enumCount++;
        }
    }
    echo "  Generated {$enumCount} enum classes.\n";

    echo "  Written to {$outputDir}/\n";
}

// --- Entry point ---

$channel = $argv[1] ?? 'both';

if ($channel === 'both') {
    wlGenerateSdk('stable');
    wlGenerateSdk('dev');
    wlGenerateSdk('production', true);
} elseif ($channel === 'stable' || $channel === 'dev') {
    wlGenerateSdk($channel);
} elseif ($channel === 'production') {
    // production is optional - exits 0 even when spec is not yet published
    wlGenerateSdk('production', true);
} else {
    fwrite(STDERR, "Usage: php generate.php [stable|dev|production|both]\n");
    exit(1);
}

echo "Done.\n";
