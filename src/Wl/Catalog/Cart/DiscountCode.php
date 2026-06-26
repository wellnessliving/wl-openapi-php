<?php

namespace WlSdk\Wl\Catalog\Cart;

use WlSdk\WlSdkClient;

/**
 * Checks discount code and whether it can be applied to the elements of the purchase.
 */
class DiscountCode
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks discount code and whether it can be applied to the elements of the purchase.
     *
     * @return DiscountCodeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DiscountCodeGetRequest $request): DiscountCodeGetResponse
    {
        return new DiscountCodeGetResponse($this->client->request('/Wl/Catalog/Cart/DiscountCode.json', $request->params(), 'GET'));
    }
}
