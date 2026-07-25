<?php

namespace WlSdk\Wl\Pay\Processor\StripeCom;

use WlSdk\WlSdkClient;

/**
 * Gets the `Stripe` public key for a merchant.
 */
class StripeComKey
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets the `Stripe` public key for a merchant.
     *
     * Returns the publishable key configured for the business merchant, so it can be used by the
     *  frontend to initialize `Stripe` payment elements.
     *
     * @return StripeComKeyPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StripeComKeyPostRequest $request): StripeComKeyPostResponse
    {
        return new StripeComKeyPostResponse($this->client->request('/Wl/Pay/Processor/StripeCom/StripeComKey.json', $request->params(), 'POST'));
    }
}
