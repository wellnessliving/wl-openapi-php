<?php

namespace WlSdk\Wl\Shop\Supplier;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Shop/Supplier/ShopSupplier.json
 */
class ShopSupplier
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Shop/Supplier/ShopSupplier.json.
     *
     * @return ShopSupplierGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ShopSupplierGetRequest $request): ShopSupplierGetResponse
    {
        return new ShopSupplierGetResponse($this->client->request('/Wl/Shop/Supplier/ShopSupplier.json', $request->params(), 'GET'));
    }
}
