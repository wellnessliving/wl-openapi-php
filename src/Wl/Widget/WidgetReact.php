<?php

namespace WlSdk\Wl\Widget;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Widget/WidgetReact.json
 */
class WidgetReact
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Widget/WidgetReact.json.
     *
     * @return WidgetReactPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(WidgetReactPostRequest $request): WidgetReactPostResponse
    {
        return new WidgetReactPostResponse($this->client->request('/Wl/Widget/WidgetReact.json', $request->params(), 'POST'));
    }
}
