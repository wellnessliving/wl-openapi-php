<?php

namespace WlSdk\Wl\Report\Dashboard\Widget;

use WlSdk\WlSdkClient;

/**
 * Sets widget collapse state.
 */
class DashboardWidgetReportViewMode
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sets widget collapse state.
     *
     * @return DashboardWidgetReportViewModePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(DashboardWidgetReportViewModePutRequest $request): DashboardWidgetReportViewModePutResponse
    {
        return new DashboardWidgetReportViewModePutResponse($this->client->request('/Wl/Report/Dashboard/Widget/DashboardWidgetReportViewMode.json', $request->params(), 'PUT'));
    }
}
