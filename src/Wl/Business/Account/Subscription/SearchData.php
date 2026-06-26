<?php

namespace WlSdk\Wl\Business\Account\Subscription;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Account/Subscription/SearchData.json
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
     * Calls GET /Wl/Business/Account/Subscription/SearchData.json.
     *
     * @return SearchDataGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SearchDataGetRequest $request): SearchDataGetResponse
    {
        return new SearchDataGetResponse($this->client->request('/Wl/Business/Account/Subscription/SearchData.json', $request->params(), 'GET'));
    }
}
