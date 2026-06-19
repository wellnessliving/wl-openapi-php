<?php
namespace WlSdk\Wl\Member\Group\GroupList;

use WlSdk\WlSdkClient;

/**
 * Returns all member groups list in the business if `$a_member_group_select` is empty,
 * otherwise filters result according to `$a_member_group_select`.
 */
class List
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

    /**
     * Updates the order of groups in a list.
     *
     * Saves the display order of member groups for the business using the positions supplied in
     * `$a_member_group_order`, verifying that all specified group keys belong to the business before writing.
     *
     * @return ListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ListPutRequest $request): ListPutResponse
    {
        return new ListPutResponse($this->client->request('/Wl/Member/Group/GroupList/List.json', $request->params(), 'PUT'));
    }

    /**
     * Removes groups.
     *
     * Deletes specified groups and associated search templates.
     *
     * @return ListDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ListDeleteRequest $request): ListDeleteResponse
    {
        return new ListDeleteResponse($this->client->request('/Wl/Member/Group/GroupList/List.json', $request->params(), 'DELETE'));
    }
}
