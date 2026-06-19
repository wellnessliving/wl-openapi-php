<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Returns a paginated list of active member user keys for the specified business.
 */
class LoginMemberListAll
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a paginated list of active member user keys for the specified business.
     *
     * Accepts a business key, an optional page size, and an optional last-seen user key for cursor-based
     * pagination,
     * then returns an ordered array of user keys for all active members of that business.
     *
     * @return LoginMemberListAllGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LoginMemberListAllGetRequest $request): LoginMemberListAllGetResponse
    {
        return new LoginMemberListAllGetResponse($this->client->request('/Wl/Login/Member/LoginMemberListAll.json', $request->params(), 'GET'));
    }
}
