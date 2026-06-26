<?php

namespace WlSdk\Wl\Business\Franchise\Region;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Franchise/Region/Region.json
 */
class Region
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Business/Franchise/Region/Region.json.
     *
     * @return RegionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RegionPostRequest $request): RegionPostResponse
    {
        return new RegionPostResponse($this->client->request('/Wl/Business/Franchise/Region/Region.json', $request->params(), 'POST'));
    }

    /**
     * Calls DELETE /Wl/Business/Franchise/Region/Region.json.
     *
     * @return RegionDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(RegionDeleteRequest $request): RegionDeleteResponse
    {
        return new RegionDeleteResponse($this->client->request('/Wl/Business/Franchise/Region/Region.json', $request->params(), 'DELETE'));
    }
}
