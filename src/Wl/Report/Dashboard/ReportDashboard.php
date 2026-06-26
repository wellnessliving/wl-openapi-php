<?php

namespace WlSdk\Wl\Report\Dashboard;

use WlSdk\WlSdkClient;

/**
 * Adds new report to a dashboard.
 */
class ReportDashboard
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Adds new report to a dashboard.
     *
     * @return ReportDashboardPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReportDashboardPostRequest $request): ReportDashboardPostResponse
    {
        return new ReportDashboardPostResponse($this->client->request('/Wl/Report/Dashboard/ReportDashboard.json', $request->params(), 'POST'));
    }

    /**
     * Updates added report to a dashboard.
     *
     * @return ReportDashboardPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ReportDashboardPutRequest $request): ReportDashboardPutResponse
    {
        return new ReportDashboardPutResponse($this->client->request('/Wl/Report/Dashboard/ReportDashboard.json', $request->params(), 'PUT'));
    }
}
