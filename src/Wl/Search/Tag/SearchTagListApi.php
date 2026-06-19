<?php
namespace WlSdk\Wl\Search\Tag;

use WlSdk\WlSdkClient;

/**
 * Returns list of search tags.
 * This is public information and method does not require any level of privileges.
 */
class SearchTagListApi
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of search tags.
This is public information and method does not require any level of privileges.
     *
     * Returns the complete list of system-wide search tags used for filtering businesses and
     * services in directory searches. No authentication or input parameters are required.
     *
     * @return SearchTagListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): SearchTagListApiGetResponse
    {
        return new SearchTagListApiGetResponse($this->client->request('/Wl/Search/Tag/SearchTagList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return [];
    }
}
