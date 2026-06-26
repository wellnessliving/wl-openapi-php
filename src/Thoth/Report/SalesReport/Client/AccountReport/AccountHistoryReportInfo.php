<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\AccountReport;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/Report/SalesReport/Client/AccountReport/AccountHistoryReportInfo.json
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
     * Calls GET /Thoth/Report/SalesReport/Client/AccountReport/AccountHistoryReportInfo.json.
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
