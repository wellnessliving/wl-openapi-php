<?php

namespace WlSdk\Core\Request\Api\Application;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Request/Api/Application/GroupList.json
 */
class GroupList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Core/Request/Api/Application/GroupList.json.
     *
     * @return GroupListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(GroupListGetRequest $request): GroupListGetResponse
    {
        return new GroupListGetResponse($this->client->request('/Core/Request/Api/Application/GroupList.json', $request->params(), 'GET'));
    }
}
