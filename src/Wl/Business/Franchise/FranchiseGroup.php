<?php

namespace WlSdk\Wl\Business\Franchise;

use WlSdk\WlSdkClient;

/**
 * Gets franchise group for a given business.
 */
class FranchiseGroup
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets franchise group for a given business.
     *
     * @return FranchiseGroupGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FranchiseGroupGetRequest $request): FranchiseGroupGetResponse
    {
        return new FranchiseGroupGetResponse($this->client->request('/Wl/Business/Franchise/FranchiseGroup.json', $request->params(), 'GET'));
    }
}
