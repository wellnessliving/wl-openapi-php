<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

use WlSdk\WlSdkClient;

/**
 * Updates a `Stripe` Payment Intent.
 */
class PaymentIntentUpdate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates a `Stripe` Payment Intent.
     *
     * Adjusts the amount and surcharge of the Payment Intent created for the Stripe Payment Element
     *  form when the cart contents change, keeping the underlying payment transaction in sync.
     *
     * @return PaymentIntentUpdatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PaymentIntentUpdatePostRequest $request): PaymentIntentUpdatePostResponse
    {
        return new PaymentIntentUpdatePostResponse($this->client->request('/Thoth/PayProcessor/StripeCom/PaymentIntentUpdate.json', $request->params(), 'POST'));
    }
}
