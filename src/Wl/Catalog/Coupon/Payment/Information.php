<?php

namespace WlSdk\Wl\Catalog\Coupon\Payment;

use WlSdk\WlSdkClient;

/**
 * Retrieves amount for the current coupon.
 */
class Information
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves amount for the current coupon.
     *
     * @return InformationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(InformationGetRequest $request): InformationGetResponse
    {
        return new InformationGetResponse($this->client->request('/Wl/Catalog/Coupon/Payment/Information.json', $request->params(), 'GET'));
    }
}
