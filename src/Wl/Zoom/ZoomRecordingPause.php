<?php

namespace WlSdk\Wl\Zoom;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Zoom/ZoomRecordingPause.json
 */
class ZoomRecordingPause
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Zoom/ZoomRecordingPause.json.
     *
     * @return ZoomRecordingPausePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ZoomRecordingPausePostRequest $request): ZoomRecordingPausePostResponse
    {
        return new ZoomRecordingPausePostResponse($this->client->request('/Wl/Zoom/ZoomRecordingPause.json', $request->params(), 'POST'));
    }
}
