<?php

namespace WlSdk\Wl\Search\Criteria;

use WlSdk\WlSdkClient;

/**
 * Gets default and saved criteria for the specified entities.
 */
class SearchCriteriaList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets default and saved criteria for the specified entities.
     *
     * @return SearchCriteriaListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SearchCriteriaListGetRequest $request): SearchCriteriaListGetResponse
    {
        return new SearchCriteriaListGetResponse($this->client->request('/Wl/Search/Criteria/SearchCriteriaList.json', $request->params(), 'GET'));
    }
}
