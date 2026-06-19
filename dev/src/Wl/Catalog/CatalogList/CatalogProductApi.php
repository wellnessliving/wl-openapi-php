<?php
namespace WlSdk\Wl\Catalog\CatalogList;

use WlSdk\WlSdkClient;

/**
 * Gets store products by shop category.
 */
class CatalogProductApi
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
     * Additional data to filter products.
     *
     * @var array[]|null
     */
    public ?array $a_filter = null;

    /**
     * The currently shown element.
     *
     * @var int|null
     */
    public ?int $i_last = null;

    /**
     * The business key to get products for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The selected shop category.

This will be `0` for the system's Unassigned category or `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_shop_category = null;

    /**
     * The cache key used to get products.
     *
     * @var string|null
     */
    public ?string $s_cache_key = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets store products by shop category.
     *
     * Used to populate a specific product category tab in the client-facing store. Supports pagination so
     * large categories can be loaded incrementally. Returns the products together with the sort order
     * configured for the category and a cache key for client-side caching.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_category_sort: No description.
     *   - array[] a_product: No description.
     *   - int i_last: The currently shown element.
     *   - bool is_load_more: Determines whether more products can be loaded.
     *   - string s_cache_key: The cache key used to get products.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Catalog/CatalogList/CatalogProduct.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_filter' => $this->a_filter,
            'i_last' => $this->i_last,
            'k_business' => $this->k_business,
            'k_shop_category' => $this->k_shop_category,
            's_cache_key' => $this->s_cache_key,
            ],
            static fn($v) => $v !== null
        );
    }
}
