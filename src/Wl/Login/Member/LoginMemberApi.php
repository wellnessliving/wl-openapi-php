<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Gets client ID for a specific client in a business.
 */
class LoginMemberApi
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user's key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The user's ID to get/set.
     *
     * @var string|null
     */
    public ?string $s_member = null;

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
     * @return LoginMemberApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): LoginMemberApiGetResponse
    {
        return new LoginMemberApiGetResponse($this->client->request('/Wl/Login/Member/LoginMember.json', $this->params(), 'GET'));
    }

    /**
     * Updates client ID for a specific client in a business.
     *
     * Validates and saves the new member ID for the given client in the specified business, reindexes the user for
     * search, and returns the date the user originally became a member.
     *
     * @return LoginMemberApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): LoginMemberApiPostResponse
    {
        return new LoginMemberApiPostResponse($this->client->request('/Wl/Login/Member/LoginMember.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            's_member' => $this->s_member,
            ],
            static fn($v) => $v !== null
        );
    }
}
