<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/StripeCom/StripeComKey.json
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
     * Calls POST /Thoth/PayProcessor/StripeCom/StripeComKey.json.
     *
     * @return StripeComKeyPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StripeComKeyPostRequest $request): StripeComKeyPostResponse
    {
        return new StripeComKeyPostResponse($this->client->request('/Thoth/PayProcessor/StripeCom/StripeComKey.json', $request->params(), 'POST'));
    }
}
