<?php
namespace WlSdk\Wl\Catalog\Cart;

use WlSdk\WlSdkClient;

/**
 * Gets purchase cost data.
 */
class Cart
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets purchase cost data.
     *
     * Used in the client-facing checkout flow to show a live price summary before the client submits
     * payment. Calculates the full breakdown - subtotal, taxes, applied discounts, reward redemptions,
     * and tips - so the client can review the total before confirming.
     *
     * @return CartGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CartGetRequest $request): CartGetResponse
    {
        return new CartGetResponse($this->client->request('/Wl/Catalog/Cart/Cart.json', $request->params(), 'GET'));
    }
}
