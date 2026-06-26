<?php

namespace WlSdk\Thoth\PayProcessor\DirectConnect\Terminal;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/DirectConnect/Terminal/TerminalTransactionCancel.json
 */
class TerminalTransactionCancel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/DirectConnect/Terminal/TerminalTransactionCancel.json.
     *
     * @return TerminalTransactionCancelPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TerminalTransactionCancelPostRequest $request): TerminalTransactionCancelPostResponse
    {
        return new TerminalTransactionCancelPostResponse($this->client->request('/Thoth/PayProcessor/DirectConnect/Terminal/TerminalTransactionCancel.json', $request->params(), 'POST'));
    }
}
