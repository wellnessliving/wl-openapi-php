<?php

namespace WlSdk\Wl\Rank;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Rank/SearchData.json
 */
class SearchData
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Rank/SearchData.json.
     *
     * @return SearchDataGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SearchDataGetRequest $request): SearchDataGetResponse
    {
        return new SearchDataGetResponse($this->client->request('/Wl/Rank/SearchData.json', $request->params(), 'GET'));
    }
}
