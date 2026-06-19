<?php
namespace WlSdk\Wl\Video;

use WlSdk\WlSdkClient;

/**
 * Creates or updates a video for the specified business.
 */
class VideoElementPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates or updates a video for the specified business.
     *
     * Saves a video record with its title, description, categories, tags, difficulty level,
     * staff assignments, and access settings. When no video key is provided, a new record is
     * created; otherwise the existing record is updated. Requires backend access with the
     * video library management privilege and an active video subscription.
     *
     * @return VideoElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(VideoElementPostRequest $request): VideoElementPostResponse
    {
        return new VideoElementPostResponse($this->client->request('/Wl/Video/VideoElement.json', $request->params(), 'POST'));
    }
}
