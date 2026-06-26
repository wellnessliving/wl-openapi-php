<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/Nuvei/NuveiTransactionCancel.json
 */
class NuveiTransactionCancel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/Nuvei/NuveiTransactionCancel.json.
     *
     * @return NuveiTransactionCancelPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NuveiTransactionCancelPostRequest $request): NuveiTransactionCancelPostResponse
    {
        return new NuveiTransactionCancelPostResponse($this->client->request('/Thoth/PayProcessor/Nuvei/NuveiTransactionCancel.json', $request->params(), 'POST'));
    }
}
