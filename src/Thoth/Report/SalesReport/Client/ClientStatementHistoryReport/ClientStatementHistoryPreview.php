<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\ClientStatementHistoryReport;

use WlSdk\WlSdkClient;

/**
 * Returns the HTML of an account statement.
 */
class ClientStatementHistoryPreview
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the HTML of an account statement.
     *
     * Checks that the statement belongs to the business and that the caller has access to the profile of the
     * client,
     * then gives the statement as a complete HTML document for a preview in an isolated frame.
     *
     * @return ClientStatementHistoryPreviewGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ClientStatementHistoryPreviewGetRequest $request): ClientStatementHistoryPreviewGetResponse
    {
        return new ClientStatementHistoryPreviewGetResponse($this->client->request('/Thoth/Report/SalesReport/Client/ClientStatementHistoryReport/ClientStatementHistoryPreview.json', $request->params(), 'GET'));
    }
}
