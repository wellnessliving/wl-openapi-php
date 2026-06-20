<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass\Claim;

use WlSdk\WlSdkClient;

/**
 * Claims the guest pass invitation for the current user and accepts it.
 */
class Claim
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Claims the guest pass invitation for the current user and accepts it.
     *
     * Validates the invitation secret, verifies the current user is the intended recipient,
     *  and marks the invitation as accepted.
     *
     * @return ClaimPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ClaimPostRequest $request): ClaimPostResponse
    {
        return new ClaimPostResponse($this->client->request('/Wl/Login/Promotion/GuestPass/Claim/Claim.json', $request->params(), 'POST'));
    }
}
