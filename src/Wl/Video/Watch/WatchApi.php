<?php
namespace WlSdk\Wl\Video\Watch;

use WlSdk\WlSdkClient;

/**
 * Records the start of a video watch session for the current user.
 */
class WatchApi
{
    /**
     * The current time in seconds the user is at in the video.
     *
     * @var int|null
     */
    public ?int $i_current_time = null;

    /**
     * The source ID.
     *
     * @var int|null
     */
    public ?int $id_source = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The video string key:
     * * [Deprecated] String key in old format.
     * * String key in new format.
     *
     * @var string|null
     */
    public ?string $k_video = null;

    /**
     * The duration in seconds the user has watched the video for.
     *
     * @var int|null
     */
    public ?int $i_watched = null;

    /**
     * The video watch key.
     *
     * @var string|null
     */
    public ?string $k_video_watch = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Records the start of a video watch session for the current user.
     *
     * Creates a new watch record for the user and video, verifying that the user has access to
     * the video under their current membership. Returns the watch key that the client must use
     * for subsequent progress updates via `put()`. Admin users are silently
     * skipped - no record is created for them.
     *
     * @return WatchApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): WatchApiPostResponse
    {
        return new WatchApiPostResponse($this->client->request('/Wl/Video/Watch/Watch.json', $this->params(), 'POST'));
    }

    /**
     * Updates the watch progress (current position and total watched time) for an existing watch record.
     *
     * Advances the stored playback position and accumulated watch time for the given watch record.
     * The total watched time can only increase; updates that report a smaller value than what is
     * already stored are silently ignored to handle out-of-order requests.
     *
     * @return WatchApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): WatchApiPutResponse
    {
        return new WatchApiPutResponse($this->client->request('/Wl/Video/Watch/Watch.json', $this->params(), 'PUT'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'i_current_time' => $this->i_current_time,
            'id_source' => $this->id_source,
            'k_business' => $this->k_business,
            'k_video' => $this->k_video,
            'i_watched' => $this->i_watched,
            'k_video_watch' => $this->k_video_watch,
            ],
            static fn($v) => $v !== null
        );
    }
}
