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
     * When a task is added, every staff member gets a task of their own, all of them saved in one transaction:
     * either
     *  all the tasks are created, or none. When a task is edited, exactly one staff member is given. Inactive
     * staff
     *  members, and staff members the current user may not assign a task to, are refused; a staff member who is
     *  already assigned to the edited task may stay there. The keys of the saved tasks are returned in `a_k_task`.
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
     * If the task is set to Completed and repeats "when this one is completed", the next task of the repeat is
     * made,
     * and its staff are notified as of any new task. A status other than Completed, and a task that was Completed
     * already, make nothing.
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
     * If the task carries the rule of a repeat, the repeat ends with it.
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
