<?php

namespace WlSdk\Wl\Report\Dashboard\Widget;

use WlSdk\WlSdkClient;

/**
 * Sets widget collapse state.
 */
class DashboardWidget
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
     * @return DashboardWidgetPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(DashboardWidgetPutRequest $request): DashboardWidgetPutResponse
    {
        return new DashboardWidgetPutResponse($this->client->request('/Wl/Report/Dashboard/Widget/DashboardWidget.json', $request->params(), 'PUT'));
    }

    /**
     * Deletes dashboard widget.
     *
     * @return DashboardWidgetDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(DashboardWidgetDeleteRequest $request): DashboardWidgetDeleteResponse
    {
        return new DashboardWidgetDeleteResponse($this->client->request('/Wl/Report/Dashboard/Widget/DashboardWidget.json', $request->params(), 'DELETE'));
    }
}
