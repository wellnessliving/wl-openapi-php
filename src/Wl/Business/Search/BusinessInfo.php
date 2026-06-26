<?php

namespace WlSdk\Wl\Business\Search;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Search/BusinessInfo.json
 */
class BusinessInfo
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Business/Search/BusinessInfo.json.
     *
     * @return BusinessInfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessInfoGetRequest $request): BusinessInfoGetResponse
    {
        return new BusinessInfoGetResponse($this->client->request('/Wl/Business/Search/BusinessInfo.json', $request->params(), 'GET'));
    }
}
