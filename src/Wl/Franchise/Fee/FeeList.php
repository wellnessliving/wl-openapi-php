<?php

namespace WlSdk\Wl\Franchise\Fee;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Franchise/Fee/FeeList.json
 */
class FeeList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Franchise/Fee/FeeList.json.
     *
     * @return FeeListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FeeListGetRequest $request): FeeListGetResponse
    {
        return new FeeListGetResponse($this->client->request('/Wl/Franchise/Fee/FeeList.json', $request->params(), 'GET'));
    }
}
