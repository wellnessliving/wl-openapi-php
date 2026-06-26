<?php

namespace WlSdk\Wl\Zoom;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Zoom/ZoomUserRelease.json
 */
class ZoomUserRelease
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls PUT /Wl/Zoom/ZoomUserRelease.json.
     *
     * @return ZoomUserReleasePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ZoomUserReleasePutRequest $request): ZoomUserReleasePutResponse
    {
        return new ZoomUserReleasePutResponse($this->client->request('/Wl/Zoom/ZoomUserRelease.json', $request->params(), 'PUT'));
    }
}
