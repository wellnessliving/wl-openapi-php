<?php

namespace WlSdk\Wl\Report\Dashboard\Menu;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Report/Dashboard/Menu/MenuReport.json
 */
class MenuReport
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Report/Dashboard/Menu/MenuReport.json.
     *
     * @return MenuReportGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MenuReportGetRequest $request): MenuReportGetResponse
    {
        return new MenuReportGetResponse($this->client->request('/Wl/Report/Dashboard/Menu/MenuReport.json', $request->params(), 'GET'));
    }
}
