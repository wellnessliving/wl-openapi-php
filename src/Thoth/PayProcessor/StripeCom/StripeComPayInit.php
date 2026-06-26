<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/StripeCom/StripeComPayInit.json
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
     * Calls POST /Thoth/PayProcessor/StripeCom/StripeComPayInit.json.
     *
     * @return StripeComPayInitPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StripeComPayInitPostRequest $request): StripeComPayInitPostResponse
    {
        return new StripeComPayInitPostResponse($this->client->request('/Thoth/PayProcessor/StripeCom/StripeComPayInit.json', $request->params(), 'POST'));
    }
}
