<?php

namespace WlSdk\Wl\Member\Group;

use WlSdk\WlSdkClient;

/**
 * Gets users in the quick group.
 */
class GroupTemporary
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets users in the quick group.
     *
     * @return GroupTemporaryGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(GroupTemporaryGetRequest $request): GroupTemporaryGetResponse
    {
        return new GroupTemporaryGetResponse($this->client->request('/Wl/Member/Group/GroupTemporary.json', $request->params(), 'GET'));
    }
}
