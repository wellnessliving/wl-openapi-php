<?php

namespace WlSdk\Wl\Member\Group\GroupList;

use WlSdk\WlSdkClient;

/**
 * Returns all member groups list in the business if `$a_member_group_select` is empty,
 * otherwise filters result according to `$a_member_group_select`.
 */
class ListEndpoint
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
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Member/Group/GroupList/List.json', $request->params(), 'GET'));
    }

    /**
     * Updates the order of groups in a list.
     *
     * Saves the display order of member groups for the business using the positions supplied in
     * `$a_member_group_order`, verifying that all specified group keys belong to the business before writing.
     *
     * @return ListEndpointPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ListEndpointPutRequest $request): ListEndpointPutResponse
    {
        return new ListEndpointPutResponse($this->client->request('/Wl/Member/Group/GroupList/List.json', $request->params(), 'PUT'));
    }

    /**
     * Removes groups.
     *
     * Deletes specified groups and associated search templates.
     *
     * @return ListEndpointDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ListEndpointDeleteRequest $request): ListEndpointDeleteResponse
    {
        return new ListEndpointDeleteResponse($this->client->request('/Wl/Member/Group/GroupList/List.json', $request->params(), 'DELETE'));
    }
}
