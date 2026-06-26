<?php

namespace WlSdk\Core\Docs\Search;

use WlSdk\WlSdkClient;

/**
 * Performs search and returns list of found records.
 */
class DocsSearch
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs search and returns list of found records.
     *
     * @return DocsSearchGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DocsSearchGetRequest $request): DocsSearchGetResponse
    {
        return new DocsSearchGetResponse($this->client->request('/Core/Docs/Search/DocsSearch.json', $request->params(), 'GET'));
    }
}
