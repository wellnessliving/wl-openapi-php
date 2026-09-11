<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei\Terminal\OMNIChannelApi;

use WlSdk\WlSdkClient;

/**
 * Starts a payment transaction on a `Nuvei` POS terminal.
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
     * Starts a payment transaction on a `Nuvei` POS terminal.
     *
     * Validates the terminal, business merchant, and staff permissions, then creates a pay
     *  transaction and sends a payment request to the terminal. If another transaction is already
     *  in progress on the terminal, attempts to recover or cancel it. Schedules a background task to
     *  poll the terminal for the swipe result and a fallback task to void the transaction if it is
     *  never completed.
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
