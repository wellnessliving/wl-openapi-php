<?php
namespace WlSdk\Wl\Video;

use WlSdk\WlSdkClient;

/**
 * Returns the data for the specified video.
 */
class VideoElementGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the data for the specified video.
     *
     * Returns detailed information about a single video, including title, description, duration,
     * categories, tags, difficulty level, assigned staff, virtual session settings, and playback
     * progress for the current user. In frontend mode, access is restricted to videos the current
     * user is allowed to watch based on their membership and login type.
     *
     * @return VideoElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(VideoElementGetRequest $request): VideoElementGetResponse
    {
        return new VideoElementGetResponse($this->client->request('/Wl/Video/VideoElement.json', $request->params(), 'GET'));
    }
}
