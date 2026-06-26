<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/Nuvei/NuveiTransactionStart.json
 */
class NuveiTransactionStart
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/Nuvei/NuveiTransactionStart.json.
     *
     * @deprecated Use {@link \Thoth\PayProcessor\Nuvei\NuveiOpenOrderApi} instead.
     *
     * @return NuveiTransactionStartPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NuveiTransactionStartPostRequest $request): NuveiTransactionStartPostResponse
    {
        return new NuveiTransactionStartPostResponse($this->client->request('/Thoth/PayProcessor/Nuvei/NuveiTransactionStart.json', $request->params(), 'POST'));
    }
}
