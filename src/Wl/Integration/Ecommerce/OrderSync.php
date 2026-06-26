<?php

namespace WlSdk\Wl\Integration\Ecommerce;

use WlSdk\WlSdkClient;

/**
 * Creates a new order in WellnessLiving based on the provided data.
 * Sets `k_purchase` on success.
 */
class OrderSync
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new order in WellnessLiving based on the provided data.
Sets `k_purchase` on success.
     *
     * @return OrderSyncPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(OrderSyncPostRequest $request): OrderSyncPostResponse
    {
        return new OrderSyncPostResponse($this->client->request('/Wl/Integration/Ecommerce/OrderSync.json', $request->params(), 'POST'));
    }
}
