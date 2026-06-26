<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/Nuvei/NuveiOpenOrder.json
 */
class NuveiOpenOrder
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/Nuvei/NuveiOpenOrder.json.
     *
     * @return NuveiOpenOrderPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NuveiOpenOrderPostRequest $request): NuveiOpenOrderPostResponse
    {
        return new NuveiOpenOrderPostResponse($this->client->request('/Thoth/PayProcessor/Nuvei/NuveiOpenOrder.json', $request->params(), 'POST'));
    }
}
