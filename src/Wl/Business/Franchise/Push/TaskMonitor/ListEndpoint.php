<?php

namespace WlSdk\Wl\Business\Franchise\Push\TaskMonitor;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Franchise/Push/TaskMonitor/List.json
 */
class ListEndpoint
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Business/Franchise/Push/TaskMonitor/List.json.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Business/Franchise/Push/TaskMonitor/List.json', $request->params(), 'GET'));
    }
}
