<?php
namespace WlSdk\Wl\Skin\Application\Resource;

use WlSdk\WlSdkClient;

/**
 * Uploads image and file assets for the given business application.
 */
class ApplicationResourceUploadApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $a_image_upload = null;

    /**
     * Firebase Android config file (`google-services.json`).
     *
     * @var string|null
     */
    public ?string $f_google_services_json = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Uploads image and file assets for the given business application.
     *
     * Each image must be submitted as `a_image_upload[{key}]`, where `{key}` is the image ID.
     * The `google-services.json` file must be submitted as `google_services_json`.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Skin/Application/Resource/ApplicationResourceUpload.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_image_upload' => $this->a_image_upload,
            'f_google_services_json' => $this->f_google_services_json,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
