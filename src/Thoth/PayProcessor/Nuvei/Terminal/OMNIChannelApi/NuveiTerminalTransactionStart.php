<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei\Terminal\OMNIChannelApi;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/Nuvei/Terminal/OMNIChannelApi/NuveiTerminalTransactionStart.json
 */
class NuveiTerminalTransactionStart
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/Nuvei/Terminal/OMNIChannelApi/NuveiTerminalTransactionStart.json.
     *
     * @return NuveiTerminalTransactionStartPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NuveiTerminalTransactionStartPostRequest $request): NuveiTerminalTransactionStartPostResponse
    {
        return new NuveiTerminalTransactionStartPostResponse($this->client->request('/Thoth/PayProcessor/Nuvei/Terminal/OMNIChannelApi/NuveiTerminalTransactionStart.json', $request->params(), 'POST'));
    }
}
