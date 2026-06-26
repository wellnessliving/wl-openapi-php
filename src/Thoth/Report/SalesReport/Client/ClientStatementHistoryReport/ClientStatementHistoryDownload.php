<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\ClientStatementHistoryReport;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/Report/SalesReport/Client/ClientStatementHistoryReport/ClientStatementHistoryDownload.json
 */
class ClientStatementHistoryDownload
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/Report/SalesReport/Client/ClientStatementHistoryReport/ClientStatementHistoryDownload.json.
     *
     * @return ClientStatementHistoryDownloadGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ClientStatementHistoryDownloadGetRequest $request): ClientStatementHistoryDownloadGetResponse
    {
        return new ClientStatementHistoryDownloadGetResponse($this->client->request('/Thoth/Report/SalesReport/Client/ClientStatementHistoryReport/ClientStatementHistoryDownload.json', $request->params(), 'GET'));
    }
}
