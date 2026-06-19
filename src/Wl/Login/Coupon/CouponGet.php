<?php
namespace WlSdk\Wl\Login\Coupon;

use WlSdk\WlSdkClient;

/**
 * Retrieves the key and balance of a gift card by its code for the specified business.
 */
class CouponGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves the key and balance of a gift card by its code for the specified business.
     *
     * Validates the gift card code against the specified business, enforces a per-IP rate limit, and checks that
     * the
     * card is active, not already redeemed, not expired, and in the correct currency before returning its key and
     * remaining balance.
     *
     * @return CouponGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CouponGetRequest $request): CouponGetResponse
    {
        return new CouponGetResponse($this->client->request('/Wl/Login/Coupon/Coupon.json', $request->params(), 'GET'));
    }
}
