<?php

namespace WlSdk\Wl\Zapier\Lead\Action;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Zapier/Lead/Action/Create.json
 */
class Create
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Zapier/Lead/Action/Create.json.
     *
     * @return CreateGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CreateGetRequest $request): CreateGetResponse
    {
        return new CreateGetResponse($this->client->request('/Wl/Zapier/Lead/Action/Create.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Zapier/Lead/Action/Create.json.
     *
     * @return CreatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CreatePostRequest $request): CreatePostResponse
    {
        return new CreatePostResponse($this->client->request('/Wl/Zapier/Lead/Action/Create.json', $request->params(), 'POST'));
    }

    /**
     * Calls PUT /Wl/Zapier/Lead/Action/Create.json.
     *
     * @return CreatePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(CreatePutRequest $request): CreatePutResponse
    {
        return new CreatePutResponse($this->client->request('/Wl/Zapier/Lead/Action/Create.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/Zapier/Lead/Action/Create.json.
     *
     * @return CreatePatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(CreatePatchRequest $request): CreatePatchResponse
    {
        return new CreatePatchResponse($this->client->request('/Wl/Zapier/Lead/Action/Create.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/Zapier/Lead/Action/Create.json.
     *
     * @return CreateDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(CreateDeleteRequest $request): CreateDeleteResponse
    {
        return new CreateDeleteResponse($this->client->request('/Wl/Zapier/Lead/Action/Create.json', $request->params(), 'DELETE'));
    }
}
