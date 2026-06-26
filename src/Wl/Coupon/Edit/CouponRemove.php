<?php

namespace WlSdk\Wl\Coupon\Edit;

use WlSdk\WlSdkClient;

/**
 * Removes Gift Card from the business.
 */
class CouponRemove
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Removes Gift Card from the business.
     *
     * @return CouponRemovePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CouponRemovePostRequest $request): CouponRemovePostResponse
    {
        return new CouponRemovePostResponse($this->client->request('/Wl/Coupon/Edit/CouponRemove.json', $request->params(), 'POST'));
    }
}
