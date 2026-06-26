<?php

namespace WlSdk\Wl\Video\Level;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Video/Level/LevelListFilter.json
 */
class LevelListFilter
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Video/Level/LevelListFilter.json.
     *
     * @return LevelListFilterGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LevelListFilterGetRequest $request): LevelListFilterGetResponse
    {
        return new LevelListFilterGetResponse($this->client->request('/Wl/Video/Level/LevelListFilter.json', $request->params(), 'GET'));
    }

    /**
     * Updates the order of video levels.
     *
     * Reorders the difficulty levels for the business video library according to the provided list.
     * Requires backend access with the video library management privilege.
     *
     * @return LevelListFilterPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(LevelListFilterPutRequest $request): LevelListFilterPutResponse
    {
        return new LevelListFilterPutResponse($this->client->request('/Wl/Video/Level/LevelListFilter.json', $request->params(), 'PUT'));
    }
}
