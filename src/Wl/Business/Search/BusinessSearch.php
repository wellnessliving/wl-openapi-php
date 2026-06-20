<?php

namespace WlSdk\Wl\Business\Search;

use WlSdk\WlSdkClient;

/**
 * Searches for businesses by name and returns matching business keys.
 */
class BusinessSearch
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Searches for businesses by name and returns matching business keys.
     *
     * Used in internal tools and admin pages to find a business by name or key when only partial information
     * is known. Protected by a captcha to prevent automated enumeration. In strict mode, the title must
     * match exactly; otherwise partial word matches are returned sorted by relevance.
     *
     * @return BusinessSearchGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessSearchGetRequest $request): BusinessSearchGetResponse
    {
        return new BusinessSearchGetResponse($this->client->request('/Wl/Business/Search/BusinessSearch.json', $request->params(), 'GET'));
    }
}
