<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

use WlSdk\WlSdkClient;

/**
 * Cancels a `Stripe` Payment Intent.
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
     * Cancels a `Stripe` Payment Intent.
     *
     * Verifies that the Payment Intent belongs to the current payer authentication session, then
     *  refunds the associated payment transaction to release the reserved amount.
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
