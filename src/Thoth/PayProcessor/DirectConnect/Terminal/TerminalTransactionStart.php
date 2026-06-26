<?php

namespace WlSdk\Thoth\PayProcessor\DirectConnect\Terminal;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/DirectConnect/Terminal/TerminalTransactionStart.json
 */
class TerminalTransactionStart
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/DirectConnect/Terminal/TerminalTransactionStart.json.
     *
     * @return TerminalTransactionStartPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TerminalTransactionStartPostRequest $request): TerminalTransactionStartPostResponse
    {
        return new TerminalTransactionStartPostResponse($this->client->request('/Thoth/PayProcessor/DirectConnect/Terminal/TerminalTransactionStart.json', $request->params(), 'POST'));
    }
}
