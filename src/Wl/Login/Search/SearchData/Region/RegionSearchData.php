<?php

namespace WlSdk\Wl\Login\Search\SearchData\Region;

use WlSdk\WlSdkClient;

/**
 * Returns list of countries and regions.
 */
class RegionSearchData
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of countries and regions.
     *
     * @return RegionSearchDataGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RegionSearchDataGetRequest $request): RegionSearchDataGetResponse
    {
        return new RegionSearchDataGetResponse($this->client->request('/Wl/Login/Search/SearchData/Region/RegionSearchData.json', $request->params(), 'GET'));
    }
}
