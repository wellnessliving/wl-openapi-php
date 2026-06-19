<?php
namespace WlSdk\Wl\Member\Group\GroupList;

use WlSdk\WlSdkClient;

/**
 * Removes groups.
 */
class ListDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
