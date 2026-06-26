<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/StripeCom/StripeComConnectionToken.json
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
     * Calls POST /Thoth/PayProcessor/StripeCom/StripeComConnectionToken.json.
     *
     * @return StripeComConnectionTokenPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StripeComConnectionTokenPostRequest $request): StripeComConnectionTokenPostResponse
    {
        return new StripeComConnectionTokenPostResponse($this->client->request('/Thoth/PayProcessor/StripeCom/StripeComConnectionToken.json', $request->params(), 'POST'));
    }
}
