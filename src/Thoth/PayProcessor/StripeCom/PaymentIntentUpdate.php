<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/StripeCom/PaymentIntentUpdate.json
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
     * Calls POST /Thoth/PayProcessor/StripeCom/PaymentIntentUpdate.json.
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
