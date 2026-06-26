<?php

namespace WlSdk\Wl\Report\Dashboard;

use WlSdk\WlSdkClient;

/**
 * Loads dashboard data.
 */
class Dashboard
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Loads dashboard data.
     *
     * @return DashboardGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DashboardGetRequest $request): DashboardGetResponse
    {
        return new DashboardGetResponse($this->client->request('/Wl/Report/Dashboard/Dashboard.json', $request->params(), 'GET'));
    }
}
