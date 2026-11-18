<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\AccountReport;

use WlSdk\WlSdkClient;

/**
 * Returns the payer information of the client.
 */
class AccountHistoryReportInfo
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the payer information of the client.
     *
     * Tells whether the client pays for relationship members and who pays for the client.
     * For a client paid for by another user, gives the name of the payer and the links to the payer's
     * Balance History and Statement History pages.
     *
     * @return AccountHistoryReportInfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AccountHistoryReportInfoGetRequest $request): AccountHistoryReportInfoGetResponse
    {
        return new AccountHistoryReportInfoGetResponse($this->client->request('/Thoth/Report/SalesReport/Client/AccountReport/AccountHistoryReportInfo.json', $request->params(), 'GET'));
    }
}
