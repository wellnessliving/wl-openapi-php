<?php

namespace WlSdk\Wl\Task\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns data for task edit form.
 */
class Edit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns data for task edit form.
     *
     * @return EditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EditGetRequest $request): EditGetResponse
    {
        return new EditGetResponse($this->client->request('/Wl/Task/Edit/Edit.json', $request->params(), 'GET'));
    }

    /**
     * Adds or changes task.
     *
     * @return EditPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EditPostRequest $request): EditPostResponse
    {
        return new EditPostResponse($this->client->request('/Wl/Task/Edit/Edit.json', $request->params(), 'POST'));
    }

    /**
     * Changes task status.
     *
     * @return EditPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(EditPutRequest $request): EditPutResponse
    {
        return new EditPutResponse($this->client->request('/Wl/Task/Edit/Edit.json', $request->params(), 'PUT'));
    }

    /**
     * Removes task.
     *
     * @return EditDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(EditDeleteRequest $request): EditDeleteResponse
    {
        return new EditDeleteResponse($this->client->request('/Wl/Task/Edit/Edit.json', $request->params(), 'DELETE'));
    }
}
