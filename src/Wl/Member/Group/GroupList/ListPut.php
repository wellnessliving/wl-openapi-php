<?php
namespace WlSdk\Wl\Member\Group\GroupList;

use WlSdk\WlSdkClient;

/**
 * Updates the order of groups in a list.
 */
class ListPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
}
