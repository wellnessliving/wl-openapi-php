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
     * Loads the task and fills the response fields the edit form needs: assigned staff, due date
     *  and time, status, location, title, client, and description.
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
     * Validates the submitted task data, saves it in a transaction, reindexes search data for the
     *  previously and newly assigned clients, logs the change, sends an assignment notification
     *  email to newly assigned staff, and notifies the task channel.
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
     * Updates the task status, logs the change, and notifies the task channel so that connected
     *  clients refresh their task list.
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
     * Deletes the task record, removes any pending due-date reminder, reindexes search data for
     *  the previously assigned client, logs the removal, and notifies the task channel so that
     *  connected clients refresh their task list.
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
