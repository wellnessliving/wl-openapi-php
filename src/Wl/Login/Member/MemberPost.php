<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Adds a user into a business.
 */
class MemberPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
