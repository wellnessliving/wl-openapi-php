<?php

namespace WlSdk\Wl\Catalog\Cart;

use WlSdk\WlSdkClient;

/**
 * Checks showing confirmation, when product's inventory current count would be negative.
 */
class CheckCurrentStock
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks showing confirmation, when product's inventory current count would be negative.
     *
     * @return CheckCurrentStockGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CheckCurrentStockGetRequest $request): CheckCurrentStockGetResponse
    {
        return new CheckCurrentStockGetResponse($this->client->request('/Wl/Catalog/Cart/CheckCurrentStock.json', $request->params(), 'GET'));
    }

    /**
     * Checks showing confirmation, when product's inventory current count would be negative.
     *
     * Works exactly as `get()` method.
     *
     * @return CheckCurrentStockPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CheckCurrentStockPostRequest $request): CheckCurrentStockPostResponse
    {
        return new CheckCurrentStockPostResponse($this->client->request('/Wl/Catalog/Cart/CheckCurrentStock.json', $request->params(), 'POST'));
    }
}
