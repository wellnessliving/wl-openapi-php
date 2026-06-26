<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\ClientStatementHistoryReport;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/Report/SalesReport/Client/ClientStatementHistoryReport/ClientStatementHistoryEmail.json
 */
class ClientStatementHistoryEmail
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/Report/SalesReport/Client/ClientStatementHistoryReport/ClientStatementHistoryEmail.json.
     *
     * @return ClientStatementHistoryEmailPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ClientStatementHistoryEmailPostRequest $request): ClientStatementHistoryEmailPostResponse
    {
        return new ClientStatementHistoryEmailPostResponse($this->client->request('/Thoth/Report/SalesReport/Client/ClientStatementHistoryReport/ClientStatementHistoryEmail.json', $request->params(), 'POST'));
    }
}
