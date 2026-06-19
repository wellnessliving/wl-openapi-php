<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Returns a paginated list of active member user keys for the specified business.
 */
class LoginMemberListAllApi
{
    /**
     * The maximum number of members to return in the list.
     * 
     * Use with `uid_last` to get the next page of results.
     *
     * @var int|null
     */
    public ?int $i_page_size = null;

    /**
     * The key of the business to get a list of members for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The last member UID from the previous page.
     * Use with `i_page_size` to get the next page of results.
     * If empty, the first page of results is returned.
     *
     * @var string|null
     */
    public ?string $uid_last = null;

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
     * @return LoginMemberListAllApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): LoginMemberListAllApiGetResponse
    {
        return new LoginMemberListAllApiGetResponse($this->client->request('/Wl/Login/Member/LoginMemberListAll.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'i_page_size' => $this->i_page_size,
            'k_business' => $this->k_business,
            'uid_last' => $this->uid_last,
            ],
            static fn($v) => $v !== null
        );
    }
}
