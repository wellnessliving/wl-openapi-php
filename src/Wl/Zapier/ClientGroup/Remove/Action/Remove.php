<?php

namespace WlSdk\Wl\Zapier\ClientGroup\Remove\Action;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Zapier/ClientGroup/Remove/Action/Remove.json
 */
class Remove
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Zapier/ClientGroup/Remove/Action/Remove.json.
     *
     * @return RemoveGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RemoveGetRequest $request): RemoveGetResponse
    {
        return new RemoveGetResponse($this->client->request('/Wl/Zapier/ClientGroup/Remove/Action/Remove.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Zapier/ClientGroup/Remove/Action/Remove.json.
     *
     * @return RemovePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RemovePostRequest $request): RemovePostResponse
    {
        return new RemovePostResponse($this->client->request('/Wl/Zapier/ClientGroup/Remove/Action/Remove.json', $request->params(), 'POST'));
    }

    /**
     * Calls PUT /Wl/Zapier/ClientGroup/Remove/Action/Remove.json.
     *
     * @return RemovePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(RemovePutRequest $request): RemovePutResponse
    {
        return new RemovePutResponse($this->client->request('/Wl/Zapier/ClientGroup/Remove/Action/Remove.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/Zapier/ClientGroup/Remove/Action/Remove.json.
     *
     * @return RemovePatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(RemovePatchRequest $request): RemovePatchResponse
    {
        return new RemovePatchResponse($this->client->request('/Wl/Zapier/ClientGroup/Remove/Action/Remove.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/Zapier/ClientGroup/Remove/Action/Remove.json.
     *
     * @return RemoveDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(RemoveDeleteRequest $request): RemoveDeleteResponse
    {
        return new RemoveDeleteResponse($this->client->request('/Wl/Zapier/ClientGroup/Remove/Action/Remove.json', $request->params(), 'DELETE'));
    }
}
