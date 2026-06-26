<?php

namespace WlSdk\Wl\Zoom;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Zoom/ZoomRecordingComplete.json
 */
class ZoomRecordingComplete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Zoom/ZoomRecordingComplete.json.
     *
     * @return ZoomRecordingCompletePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ZoomRecordingCompletePostRequest $request): ZoomRecordingCompletePostResponse
    {
        return new ZoomRecordingCompletePostResponse($this->client->request('/Wl/Zoom/ZoomRecordingComplete.json', $request->params(), 'POST'));
    }
}
