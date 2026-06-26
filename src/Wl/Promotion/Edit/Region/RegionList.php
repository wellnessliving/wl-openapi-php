<?php

namespace WlSdk\Wl\Promotion\Edit\Region;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Promotion/Edit/Region/RegionList.json
 */
class RegionList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Promotion/Edit/Region/RegionList.json.
     *
     * @return RegionListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RegionListGetRequest $request): RegionListGetResponse
    {
        return new RegionListGetResponse($this->client->request('/Wl/Promotion/Edit/Region/RegionList.json', $request->params(), 'GET'));
    }
}
