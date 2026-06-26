<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCoupon;

use WlSdk\WlSdkClient;

/**
 * Performs validation of the coupon added to the cart.
 */
class CatalogCoupon
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs validation of the coupon added to the cart.
     *
     * @return CatalogCouponGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CatalogCouponGetRequest $request): CatalogCouponGetResponse
    {
        return new CatalogCouponGetResponse($this->client->request('/Wl/Catalog/StaffApp/CatalogCoupon/CatalogCoupon.json', $request->params(), 'GET'));
    }
}
