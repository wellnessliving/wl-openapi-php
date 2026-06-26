<?php

namespace WlSdk\Wl\Zapier\ProfileField\Action;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Zapier/ProfileField/Action/UpdateField.json
 */
class UpdateField
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Zapier/ProfileField/Action/UpdateField.json.
     *
     * @return UpdateFieldGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(UpdateFieldGetRequest $request): UpdateFieldGetResponse
    {
        return new UpdateFieldGetResponse($this->client->request('/Wl/Zapier/ProfileField/Action/UpdateField.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Zapier/ProfileField/Action/UpdateField.json.
     *
     * @return UpdateFieldPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(UpdateFieldPostRequest $request): UpdateFieldPostResponse
    {
        return new UpdateFieldPostResponse($this->client->request('/Wl/Zapier/ProfileField/Action/UpdateField.json', $request->params(), 'POST'));
    }

    /**
     * Calls PUT /Wl/Zapier/ProfileField/Action/UpdateField.json.
     *
     * @return UpdateFieldPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(UpdateFieldPutRequest $request): UpdateFieldPutResponse
    {
        return new UpdateFieldPutResponse($this->client->request('/Wl/Zapier/ProfileField/Action/UpdateField.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/Zapier/ProfileField/Action/UpdateField.json.
     *
     * @return UpdateFieldPatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(UpdateFieldPatchRequest $request): UpdateFieldPatchResponse
    {
        return new UpdateFieldPatchResponse($this->client->request('/Wl/Zapier/ProfileField/Action/UpdateField.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/Zapier/ProfileField/Action/UpdateField.json.
     *
     * @return UpdateFieldDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(UpdateFieldDeleteRequest $request): UpdateFieldDeleteResponse
    {
        return new UpdateFieldDeleteResponse($this->client->request('/Wl/Zapier/ProfileField/Action/UpdateField.json', $request->params(), 'DELETE'));
    }
}
