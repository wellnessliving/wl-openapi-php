<?php
namespace WlSdk\Wl\Catalog\CatalogList;

use WlSdk\WlSdkClient;

/**
 * Gets store products by shop category.
 */
class CatalogProductApi
{
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
     * 
     * This will be `0` for the system's Unassigned category or `null` if not set yet.
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
     * @return CatalogProductApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CatalogProductApiGetResponse
    {
        return new CatalogProductApiGetResponse($this->client->request('/Wl/Catalog/CatalogList/CatalogProduct.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
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
