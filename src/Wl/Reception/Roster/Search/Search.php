<?php

namespace WlSdk\Wl\Reception\Roster\Search;

use WlSdk\WlSdkClient;

/**
 * Returns list of clients by search string.
 */
class Search
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of clients by search string.
     *
     * @return SearchGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SearchGetRequest $request): SearchGetResponse
    {
        return new SearchGetResponse($this->client->request('/Wl/Reception/Roster/Search/Search.json', $request->params(), 'GET'));
    }
}
