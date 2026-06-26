<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/Nuvei/NuveiTransactionOnAuthSuccess.json
 */
class NuveiTransactionOnAuthSuccess
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/Nuvei/NuveiTransactionOnAuthSuccess.json.
     *
     * @return NuveiTransactionOnAuthSuccessPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NuveiTransactionOnAuthSuccessPostRequest $request): NuveiTransactionOnAuthSuccessPostResponse
    {
        return new NuveiTransactionOnAuthSuccessPostResponse($this->client->request('/Thoth/PayProcessor/Nuvei/NuveiTransactionOnAuthSuccess.json', $request->params(), 'POST'));
    }
}
