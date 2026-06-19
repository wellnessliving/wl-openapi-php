<?php
namespace WlSdk\Wl\Video\Level;

use WlSdk\WlSdkClient;

/**
 * Deletes the specified video level.
 */
class LevelDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
