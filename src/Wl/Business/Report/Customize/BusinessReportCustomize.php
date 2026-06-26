<?php

namespace WlSdk\Wl\Business\Report\Customize;

use WlSdk\WlSdkClient;

/**
 * Returns the report config.
 */
class BusinessReportCustomize
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the report config.
     *
     * @return BusinessReportCustomizeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessReportCustomizeGetRequest $request): BusinessReportCustomizeGetResponse
    {
        return new BusinessReportCustomizeGetResponse($this->client->request('/Wl/Business/Report/Customize/BusinessReportCustomize.json', $request->params(), 'GET'));
    }

    /**
     * Saves the report config.
     *
     * @return BusinessReportCustomizePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BusinessReportCustomizePostRequest $request): BusinessReportCustomizePostResponse
    {
        return new BusinessReportCustomizePostResponse($this->client->request('/Wl/Business/Report/Customize/BusinessReportCustomize.json', $request->params(), 'POST'));
    }
}
