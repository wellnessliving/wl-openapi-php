<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\ClientStatementHistoryReport;

use WlSdk\WlSdkClient;

/**
 * Returns the PDF of an account statement.
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
     * Returns the PDF of an account statement.
     *
     * Checks that the statement belongs to the business and that the caller has access to the profile of the
     * client,
     * then gives the PDF as a Base64 string together with a suggested file name.
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
