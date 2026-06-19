<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Gets client ID for a specific client in a business.
 */
class LoginMember
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets client ID for a specific client in a business.
     *
     * Validates the business key and user key, checks profile access, and returns the member ID string assigned to
     * the client in the specified business. Returns an empty string if the user has no member ID set.
     *
     * @return LoginMemberGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LoginMemberGetRequest $request): LoginMemberGetResponse
    {
        return new LoginMemberGetResponse($this->client->request('/Wl/Login/Member/LoginMember.json', $request->params(), 'GET'));
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
