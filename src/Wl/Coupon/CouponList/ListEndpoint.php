<?php

namespace WlSdk\Wl\Coupon\CouponList;

use WlSdk\WlSdkClient;

/**
 * Gets list of coupons.
 */
class ListEndpoint
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of coupons.
     *
     * Used to populate the gift card picker in the store and booking flows. Returns all gift card types
     * offered by the business. In franchise mode, gift cards from all franchise locations are included.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Coupon/CouponList/List.json', $request->params(), 'GET'));
    }
}
