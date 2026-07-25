<?php

namespace WlSdk\Wl\Pay\Processor\StripeCom;

use WlSdk\WlSdkClient;

/**
 * Initializes a `Stripe` payment.
 */
class StripeComPayInit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Initializes a `Stripe` payment.
     *
     * Starts a payment transaction and creates a not-captured Payment Intent at `stripe.com`, returning
     *  its status and client secret to continue the payment flow on the frontend.
     *
     * @return StripeComPayInitPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StripeComPayInitPostRequest $request): StripeComPayInitPostResponse
    {
        return new StripeComPayInitPostResponse($this->client->request('/Wl/Pay/Processor/StripeCom/StripeComPayInit.json', $request->params(), 'POST'));
    }
}
