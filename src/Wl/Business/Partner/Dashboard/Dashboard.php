<?php

namespace WlSdk\Wl\Business\Partner\Dashboard;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Partner/Dashboard/Dashboard.json
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
     * Calls GET /Wl/Business/Partner/Dashboard/Dashboard.json.
     *
     * @return DashboardGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DashboardGetRequest $request): DashboardGetResponse
    {
        return new DashboardGetResponse($this->client->request('/Wl/Business/Partner/Dashboard/Dashboard.json', $request->params(), 'GET'));
    }
}
