<?php

namespace WlSdk\Core\Request\Api\Application;

use WlSdk\WlSdkClient;

/**
 * Returns information about a group.
 */
class GroupElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about a group.
     *
     * @return GroupElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(GroupElementGetRequest $request): GroupElementGetResponse
    {
        return new GroupElementGetResponse($this->client->request('/Core/Request/Api/Application/GroupElement.json', $request->params(), 'GET'));
    }

    /**
     * Saves a group.
     *
     * @return GroupElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(GroupElementPostRequest $request): GroupElementPostResponse
    {
        return new GroupElementPostResponse($this->client->request('/Core/Request/Api/Application/GroupElement.json', $request->params(), 'POST'));
    }

    /**
     * Deletes a group.
     *
     * @return GroupElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(GroupElementDeleteRequest $request): GroupElementDeleteResponse
    {
        return new GroupElementDeleteResponse($this->client->request('/Core/Request/Api/Application/GroupElement.json', $request->params(), 'DELETE'));
    }
}
