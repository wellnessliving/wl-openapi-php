<?php

namespace WlSdk\Wl\Zoom;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Zoom/ZoomAccountSync.json
 */
class ZoomAccountSync
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Zoom/ZoomAccountSync.json.
     *
     * @return ZoomAccountSyncPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ZoomAccountSyncPostRequest $request): ZoomAccountSyncPostResponse
    {
        return new ZoomAccountSyncPostResponse($this->client->request('/Wl/Zoom/ZoomAccountSync.json', $request->params(), 'POST'));
    }
}
