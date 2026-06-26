<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/Nuvei/NuveiUpdateOrder.json
 */
class NuveiUpdateOrder
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/Nuvei/NuveiUpdateOrder.json.
     *
     * @return NuveiUpdateOrderPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NuveiUpdateOrderPostRequest $request): NuveiUpdateOrderPostResponse
    {
        return new NuveiUpdateOrderPostResponse($this->client->request('/Thoth/PayProcessor/Nuvei/NuveiUpdateOrder.json', $request->params(), 'POST'));
    }
}
