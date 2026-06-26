<?php

namespace WlSdk\Thoth\Report\SalesReport\Transaction\TaxListReportFilterField;

use WlSdk\WlSdkClient;

/**
 * Returns taxes of the specified business.
 */
class TaxListReport
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns taxes of the specified business.
     *
     * @return TaxListReportGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TaxListReportGetRequest $request): TaxListReportGetResponse
    {
        return new TaxListReportGetResponse($this->client->request('/Thoth/Report/SalesReport/Transaction/TaxListReportFilterField/TaxListReport.json', $request->params(), 'GET'));
    }
}
