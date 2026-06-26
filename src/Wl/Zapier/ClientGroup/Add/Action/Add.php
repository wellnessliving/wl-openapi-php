<?php

namespace WlSdk\Wl\Zapier\ClientGroup\Add\Action;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Zapier/ClientGroup/Add/Action/Add.json
 */
class Add
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Zapier/ClientGroup/Add/Action/Add.json.
     *
     * @return AddGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AddGetRequest $request): AddGetResponse
    {
        return new AddGetResponse($this->client->request('/Wl/Zapier/ClientGroup/Add/Action/Add.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Zapier/ClientGroup/Add/Action/Add.json.
     *
     * @return AddPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AddPostRequest $request): AddPostResponse
    {
        return new AddPostResponse($this->client->request('/Wl/Zapier/ClientGroup/Add/Action/Add.json', $request->params(), 'POST'));
    }

    /**
     * Calls PUT /Wl/Zapier/ClientGroup/Add/Action/Add.json.
     *
     * @return AddPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(AddPutRequest $request): AddPutResponse
    {
        return new AddPutResponse($this->client->request('/Wl/Zapier/ClientGroup/Add/Action/Add.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/Zapier/ClientGroup/Add/Action/Add.json.
     *
     * @return AddPatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(AddPatchRequest $request): AddPatchResponse
    {
        return new AddPatchResponse($this->client->request('/Wl/Zapier/ClientGroup/Add/Action/Add.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/Zapier/ClientGroup/Add/Action/Add.json.
     *
     * @return AddDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AddDeleteRequest $request): AddDeleteResponse
    {
        return new AddDeleteResponse($this->client->request('/Wl/Zapier/ClientGroup/Add/Action/Add.json', $request->params(), 'DELETE'));
    }
}
