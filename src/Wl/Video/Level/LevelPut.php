<?php
namespace WlSdk\Wl\Video\Level;

use WlSdk\WlSdkClient;

/**
 * Updates the specified video level.
 */
class LevelPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
}
