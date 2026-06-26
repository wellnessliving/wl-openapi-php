<?php

namespace WlSdk\Wl\Catalog\Coupon\Payment;

use WlSdk\WlSdkClient;

/**
 * Allows to pay gift card for the client.
 */
class Payment
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Allows to pay gift card for the client.
     *
     * @return PaymentPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PaymentPostRequest $request): PaymentPostResponse
    {
        return new PaymentPostResponse($this->client->request('/Wl/Catalog/Coupon/Payment/Payment.json', $request->params(), 'POST'));
    }
}
