<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Gets client ID for a specific client in a business.
 */
class LoginMemberGet
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
}
