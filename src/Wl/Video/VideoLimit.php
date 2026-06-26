<?php

namespace WlSdk\Wl\Video;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Video/VideoLimit.json
 */
class VideoLimit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Video/VideoLimit.json.
     *
     * @return VideoLimitGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(VideoLimitGetRequest $request): VideoLimitGetResponse
    {
        return new VideoLimitGetResponse($this->client->request('/Wl/Video/VideoLimit.json', $request->params(), 'GET'));
    }
}
