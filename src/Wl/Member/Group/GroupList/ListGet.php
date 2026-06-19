<?php
namespace WlSdk\Wl\Member\Group\GroupList;

use WlSdk\WlSdkClient;

/**
 * Returns all member groups list in the business if `$a_member_group_select` is empty,
 * otherwise filters result according to `$a_member_group_select`.
 */
class ListGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns all member groups list in the business if `$a_member_group_select` is empty,
otherwise filters result according to `$a_member_group_select`.
     *
     * If `is_return_members` is `true` includes in the result list of members of each groups.
     *
     * @return ListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListGetRequest $request): ListGetResponse
    {
        return new ListGetResponse($this->client->request('/Wl/Member/Group/GroupList/List.json', $request->params(), 'GET'));
    }
}
