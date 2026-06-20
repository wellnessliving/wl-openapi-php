<?php

namespace WlSdk\Wl\Video\Level;

use WlSdk\WlSdkClient;

/**
 * Returns the list of video levels for the business.
 */
class LevelList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of video levels for the business.
     *
     * Returns all difficulty levels configured for the business video library, sorted by their
     * current display order. Used to populate level pickers when creating or editing videos.
     *
     * @return LevelListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LevelListGetRequest $request): LevelListGetResponse
    {
        return new LevelListGetResponse($this->client->request('/Wl/Video/Level/LevelList.json', $request->params(), 'GET'));
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
