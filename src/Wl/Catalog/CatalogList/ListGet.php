<?php
namespace WlSdk\Wl\Catalog\CatalogList;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of all sale items.
 */
class ListGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of all sale items.
     *
     * Used to render the full client-facing store catalog for a business. Returns all purchasable items -
     * promotions, products, events, and coupons - merged across the business's categories. The separate
     * de-duplicated list and category list support both the flat and category-tabbed views.
     *
     * @return ListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListGetRequest $request): ListGetResponse
    {
        return new ListGetResponse($this->client->request('/Wl/Catalog/CatalogList/List.json', $request->params(), 'GET'));
    }
}
