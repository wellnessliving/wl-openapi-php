<?php

namespace WlSdk\Wl\Catalog\Coupon;

use WlSdk\WlSdkClient;

/**
 * Adds new amount coupon gift card.
 * Note, that only one card of [TypeSid::AMOUNT](#/components/schemas/Wl.Coupon.TypeSid) can be created in one
 * business.
 */
class AmountCoupon
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Adds new amount coupon gift card.
Note, that only one card of {@link \WlSdk\Wl\Coupon\TypeSid} can be created in one business.
     *
     * @return AmountCouponPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AmountCouponPostRequest $request): AmountCouponPostResponse
    {
        return new AmountCouponPostResponse($this->client->request('/Wl/Catalog/Coupon/AmountCoupon.json', $request->params(), 'POST'));
    }
}
