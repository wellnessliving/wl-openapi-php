<?php

namespace WlSdk\Wl\Login\Coupon\Transfer;

use WlSdk\WlSdkClient;

/**
 * Checks whether users are related.
 */
class CouponTransfer
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks whether users are related.
     *
     * @return CouponTransferGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CouponTransferGetRequest $request): CouponTransferGetResponse
    {
        return new CouponTransferGetResponse($this->client->request('/Wl/Login/Coupon/Transfer/CouponTransfer.json', $request->params(), 'GET'));
    }

    /**
     * Transfers purchased coupon to another user.
     *
     * @return CouponTransferPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CouponTransferPostRequest $request): CouponTransferPostResponse
    {
        return new CouponTransferPostResponse($this->client->request('/Wl/Login/Coupon/Transfer/CouponTransfer.json', $request->params(), 'POST'));
    }
}
