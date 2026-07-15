<?php

namespace WlSdk\Wl\Widget\Analytics;

use WlSdk\WlSdkClient;

/**
 * Accepts a Widget analytics event.
 */
class WidgetAnalyticsEvent
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Accepts a Widget analytics event.
     *
     * @return WidgetAnalyticsEventPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(WidgetAnalyticsEventPostRequest $request): WidgetAnalyticsEventPostResponse
    {
        return new WidgetAnalyticsEventPostResponse($this->client->request('/Wl/Widget/Analytics/WidgetAnalyticsEvent.json', $request->params(), 'POST'));
    }
}
