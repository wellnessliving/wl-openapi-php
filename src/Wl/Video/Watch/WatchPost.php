<?php
namespace WlSdk\Wl\Video\Watch;

use WlSdk\WlSdkClient;

/**
 * Records the start of a video watch session for the current user.
 */
class WatchPost
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
}
