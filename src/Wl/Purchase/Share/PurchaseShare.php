<?php

namespace WlSdk\Wl\Purchase\Share;

use WlSdk\WlSdkClient;

/**
 * Records the purchase share action and returns the social network sharing URL.
 */
class PurchaseShare
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Records the purchase share action and returns the social network sharing URL.
     *
     * Validates that the caller owns the purchase, prevents duplicate share actions, saves the share record,
     * and returns the social network URL for sharing.
     *
     * @return PurchaseSharePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PurchaseSharePostRequest $request): PurchaseSharePostResponse
    {
        return new PurchaseSharePostResponse($this->client->request('/Wl/Purchase/Share/PurchaseShare.json', $request->params(), 'POST'));
    }
}
