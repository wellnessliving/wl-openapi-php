<?php

namespace WlSdk\Wl\Zoom;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Zoom/ZoomUserSync.json
 */
class ZoomUserSync
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Zoom/ZoomUserSync.json.
     *
     * @return ZoomUserSyncPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ZoomUserSyncPostRequest $request): ZoomUserSyncPostResponse
    {
        return new ZoomUserSyncPostResponse($this->client->request('/Wl/Zoom/ZoomUserSync.json', $request->params(), 'POST'));
    }
}
