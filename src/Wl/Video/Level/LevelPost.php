<?php
namespace WlSdk\Wl\Video\Level;

use WlSdk\WlSdkClient;

/**
 * Creates a new video level.
 */
class LevelPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new video level.
     *
     * Creates a difficulty level entry for the business video library. The new level is appended
     * at the end of the current sort order and can be reordered afterwards using
     * `put()`. Requires backend access with the video library management privilege.
     *
     * @return LevelPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LevelPostRequest $request): LevelPostResponse
    {
        return new LevelPostResponse($this->client->request('/Wl/Video/Level/Level.json', $request->params(), 'POST'));
    }
}
