<?php

namespace WlSdk\Wl\Report\Dashboard\Widget;

use WlSdk\WlSdkClient;

/**
 * Gets list of widgets (reports) that can be placed on a dashboard.
 */
class DashboardWidgetList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of widgets (reports) that can be placed on a dashboard.
     *
     * @return DashboardWidgetListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DashboardWidgetListGetRequest $request): DashboardWidgetListGetResponse
    {
        return new DashboardWidgetListGetResponse($this->client->request('/Wl/Report/Dashboard/Widget/DashboardWidgetList.json', $request->params(), 'GET'));
    }

    /**
     * Saves order of widgets on a dashboard.
     *
     * @return DashboardWidgetListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(DashboardWidgetListPutRequest $request): DashboardWidgetListPutResponse
    {
        return new DashboardWidgetListPutResponse($this->client->request('/Wl/Report/Dashboard/Widget/DashboardWidgetList.json', $request->params(), 'PUT'));
    }
}
