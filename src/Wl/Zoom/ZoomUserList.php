<?php

namespace WlSdk\Wl\Zoom;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Zoom/ZoomUserList.json
 */
class ZoomUserList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Zoom/ZoomUserList.json.
     *
     * @return ZoomUserListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ZoomUserListGetRequest $request): ZoomUserListGetResponse
    {
        return new ZoomUserListGetResponse($this->client->request('/Wl/Zoom/ZoomUserList.json', $request->params(), 'GET'));
    }
}
