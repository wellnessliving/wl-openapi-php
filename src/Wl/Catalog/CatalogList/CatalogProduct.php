<?php
namespace WlSdk\Wl\Catalog\CatalogList;

use WlSdk\WlSdkClient;

/**
 * Gets store products by shop category.
 */
class CatalogProduct
{
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
     * @return CatalogProductGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CatalogProductGetRequest $request): CatalogProductGetResponse
    {
        return new CatalogProductGetResponse($this->client->request('/Wl/Catalog/CatalogList/CatalogProduct.json', $request->params(), 'GET'));
    }
}
