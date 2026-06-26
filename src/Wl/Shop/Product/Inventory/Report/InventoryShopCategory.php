<?php

namespace WlSdk\Wl\Shop\Product\Inventory\Report;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Shop/Product/Inventory/Report/InventoryShopCategory.json
 */
class InventoryShopCategory
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Shop/Product/Inventory/Report/InventoryShopCategory.json.
     *
     * @return InventoryShopCategoryGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(InventoryShopCategoryGetRequest $request): InventoryShopCategoryGetResponse
    {
        return new InventoryShopCategoryGetResponse($this->client->request('/Wl/Shop/Product/Inventory/Report/InventoryShopCategory.json', $request->params(), 'GET'));
    }
}
