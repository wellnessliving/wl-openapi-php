<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Updates client ID for a specific client in a business.
 */
class LoginMemberPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates client ID for a specific client in a business.
     *
     * Validates and saves the new member ID for the given client in the specified business, reindexes the user for
     * search, and returns the date the user originally became a member.
     *
     * @return LoginMemberPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LoginMemberPostRequest $request): LoginMemberPostResponse
    {
        return new LoginMemberPostResponse($this->client->request('/Wl/Login/Member/LoginMember.json', $request->params(), 'POST'));
    }
}
