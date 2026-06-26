<?php

namespace WlSdk\Wl\Business\Franchise;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Franchise/Franchisee.json
 */
class Franchisee
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Business/Franchise/Franchisee.json.
     *
     * @return FranchiseePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FranchiseePostRequest $request): FranchiseePostResponse
    {
        return new FranchiseePostResponse($this->client->request('/Wl/Business/Franchise/Franchisee.json', $request->params(), 'POST'));
    }
}
