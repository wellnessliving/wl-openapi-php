<?php
namespace WlSdk\Wl\Resource\ResourceList;

use WlSdk\WlSdkClient;

/**
 * Returns assets list in the business.
 */
class ListApi
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
     * Type of the resource.

1 - if this is a bookable asset.
2 - if this is an off-site location with its own address.
     *
     * @var int|null
     */
    public ?int $id_category = null;

    /**
     * Whether to return franchisee-created resources (if business is franchisor).
`true` to include franchisee-created resources.
     *
     * @var bool|null
     */
    public ?bool $is_franchise = null;

    /**
     * Business key, primary key in RsBusinessSql.
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
     * Returns assets list in the business.
     *
     * Returns all assets if `$id_category` is not specified or only certain category assets. Includes
     *   main information about assets.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_resource: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Resource/ResourceList/List.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'id_category' => $this->id_category,
            'is_franchise' => $this->is_franchise,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
