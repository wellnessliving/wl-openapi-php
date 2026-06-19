<?php
namespace WlSdk\Wl\Video\Level;

use WlSdk\WlSdkClient;

/**
 * Updates the order of video levels.
 */
class LevelListPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates the order of video levels.
     *
     * Reorders the difficulty levels for the business video library according to the provided list.
     * Requires backend access with the video library management privilege.
     *
     * @return LevelListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(LevelListPutRequest $request): LevelListPutResponse
    {
        return new LevelListPutResponse($this->client->request('/Wl/Video/Level/LevelList.json', $request->params(), 'PUT'));
    }
}
