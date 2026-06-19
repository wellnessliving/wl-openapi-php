<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Returns the list of businesses where the specified user is an active member.
 */
class MemberApi
{
    /**
     * The user's key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Primary key of the business to add the user into.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of businesses where the specified user is an active member.
     *
     * Accepts a user key and returns all active businesses where that user has a membership, including franchise
     * relationship flags, business title, and whether the user is allowed to sign in to each business. Forwards
     * the
     * request to other data centers in multi-region deployments and merges the results.
     *
     * @return MemberApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): MemberApiGetResponse
    {
        return new MemberApiGetResponse($this->client->request('/Wl/Login/Member/Member.json', $this->params(), 'GET'));
    }

    /**
     * Adds a user into a business.
     *
     * Validates that the current user has profile access, then registers the specified user as a member of the
     * given
     * business without sending a registration email.
     *
     * @return MemberApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): MemberApiPostResponse
    {
        return new MemberApiPostResponse($this->client->request('/Wl/Login/Member/Member.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'uid' => $this->uid,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
