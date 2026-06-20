<?php
namespace WlSdk\Wl\Video\Level;

use WlSdk\WlSdkClient;

/**
 * Creates a new video level.
 */
class Level
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

    /**
     * Updates the specified video level.
     *
     * Renames an existing difficulty level in the business video library. Requires backend access
     * with the video library management privilege.
     *
     * @return LevelPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(LevelPutRequest $request): LevelPutResponse
    {
        return new LevelPutResponse($this->client->request('/Wl/Video/Level/Level.json', $request->params(), 'PUT'));
    }

    /**
     * Deletes the specified video level.
     *
     * Permanently removes the video level and unassigns it from all videos. If any videos are
     * currently assigned to this level, a confirmation flag must be set; otherwise the API throws
     * a confirmation-required error so the caller can prompt the user before proceeding.
     *
     * @return LevelDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(LevelDeleteRequest $request): LevelDeleteResponse
    {
        return new LevelDeleteResponse($this->client->request('/Wl/Video/Level/Level.json', $request->params(), 'DELETE'));
    }
}
