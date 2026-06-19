<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass\Claim;

use WlSdk\WlSdkClient;

/**
 * Claims the guest pass invitation for the current user and accepts it.
 */
class ClaimApi
{
    /**
     * Key of the business within which the invitation was issued.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Secret token identifying the guest pass invitation to claim.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

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
     * @return ClaimApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ClaimApiPostResponse
    {
        return new ClaimApiPostResponse($this->client->request('/Wl/Login/Promotion/GuestPass/Claim/Claim.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_secret' => $this->s_secret,
            ],
            static fn($v) => $v !== null
        );
    }
}
