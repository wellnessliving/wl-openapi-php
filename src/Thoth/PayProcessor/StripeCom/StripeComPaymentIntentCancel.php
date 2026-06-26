<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/StripeCom/StripeComPaymentIntentCancel.json
 */
class StripeComPaymentIntentCancel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/StripeCom/StripeComPaymentIntentCancel.json.
     *
     * @return StripeComPaymentIntentCancelPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StripeComPaymentIntentCancelPostRequest $request): StripeComPaymentIntentCancelPostResponse
    {
        return new StripeComPaymentIntentCancelPostResponse($this->client->request('/Thoth/PayProcessor/StripeCom/StripeComPaymentIntentCancel.json', $request->params(), 'POST'));
    }
}
