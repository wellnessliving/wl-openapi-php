<?php

namespace WlSdk\Wl\Video\Watch;

use WlSdk\WlSdkClient;

/**
 * Records the start of a video watch session for the current user.
 */
class Watch
{
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
     * @return WatchPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(WatchPostRequest $request): WatchPostResponse
    {
        return new WatchPostResponse($this->client->request('/Wl/Video/Watch/Watch.json', $request->params(), 'POST'));
    }

    /**
     * Updates the watch progress (current position and total watched time) for an existing watch record.
     *
     * Advances the stored playback position and accumulated watch time for the given watch record.
     * The total watched time can only increase; updates that report a smaller value than what is
     * already stored are silently ignored to handle out-of-order requests.
     *
     * @return WatchPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(WatchPutRequest $request): WatchPutResponse
    {
        return new WatchPutResponse($this->client->request('/Wl/Video/Watch/Watch.json', $request->params(), 'PUT'));
    }
}
