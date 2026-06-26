<?php

namespace WlSdk\Wl\Visit\Note\Edit;

use WlSdk\WlSdkClient;

/**
 * Gets notes data.
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
     * Gets notes data.
     *
     * @return EditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EditGetRequest $request): EditGetResponse
    {
        return new EditGetResponse($this->client->request('/Wl/Visit/Note/Edit/Edit.json', $request->params(), 'GET'));
    }

    /**
     * Saves notes data.
     *
     * @return EditPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EditPostRequest $request): EditPostResponse
    {
        return new EditPostResponse($this->client->request('/Wl/Visit/Note/Edit/Edit.json', $request->params(), 'POST'));
    }

    /**
     * Deletes note.
     *
     * @return EditDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(EditDeleteRequest $request): EditDeleteResponse
    {
        return new EditDeleteResponse($this->client->request('/Wl/Visit/Note/Edit/Edit.json', $request->params(), 'DELETE'));
    }
}
