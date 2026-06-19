<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Returns the list of businesses where the specified user is an active member.
 */
class Member
{
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
     * @return MemberGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MemberGetRequest $request): MemberGetResponse
    {
        return new MemberGetResponse($this->client->request('/Wl/Login/Member/Member.json', $request->params(), 'GET'));
    }

    /**
     * Adds a user into a business.
     *
     * Validates that the current user has profile access, then registers the specified user as a member of the
     * given
     * business without sending a registration email.
     *
     * @return MemberPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MemberPostRequest $request): MemberPostResponse
    {
        return new MemberPostResponse($this->client->request('/Wl/Login/Member/Member.json', $request->params(), 'POST'));
    }
}
