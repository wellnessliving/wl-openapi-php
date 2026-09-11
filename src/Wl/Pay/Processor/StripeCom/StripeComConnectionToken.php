<?php

namespace WlSdk\Wl\Pay\Processor\StripeCom;

use WlSdk\WlSdkClient;

/**
 * Gets a secret from a connection token for the Stripe Terminal SDK.
 */
class StripeComConnectionToken
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a secret from a connection token for the Stripe Terminal SDK.
     *
     * Validates the business merchant, the payer, and that the currency supports point-of-sale payments, then
     * creates a Stripe Terminal connection token, optionally scoped to the given location, and returns its secret.
     *
     * @return StripeComConnectionTokenPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StripeComConnectionTokenPostRequest $request): StripeComConnectionTokenPostResponse
    {
        return new StripeComConnectionTokenPostResponse($this->client->request('/Wl/Pay/Processor/StripeCom/StripeComConnectionToken.json', $request->params(), 'POST'));
    }
}
