<?php

namespace WlSdk\Wl\Task\Manager;

use WlSdk\WlSdkClient;

/**
 * Sends the notification Task reminder to the staff of the selected tasks, now.
 */
class TaskBulk
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends the notification Task reminder to the staff of the selected tasks, now.
     *
     * Every staff member who is assigned to a selected task and is active in its business gets it, a completed
     * task
     * included, and it is sent whether the business turned the notification off or not: the email and the push are
     * always sent, the text message only if the business has it on. A staff member keeps the choice of their own
     * profile. A task that has nobody to remind, and a task that someone removed already, are skipped and counted
     * in
     * `i_skip`. Nothing of the task changes.
     *
     * @return TaskBulkPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TaskBulkPostRequest $request): TaskBulkPostResponse
    {
        return new TaskBulkPostResponse($this->client->request('/Wl/Task/Manager/TaskBulk.json', $request->params(), 'POST'));
    }

    /**
     * Changes the tasks that the staff member selected.
     *
     * Sets the status, the due date and time, the client and the staff of every selected task: a field that is not
     * given
     * keeps the value that the task has. The status alone is the "Mark complete" of the page when it is
     * {@link \WlSdk\Wl\Task\TaskStatusSid}: a task of a repeat "when this one is completed" makes its next task,
     * as
     * `put()` does for one task; with the status alone a task that has the status already is not changed,
     * and is skipped and counted in `i_skip`, as a task that someone removed already is. A new due date of a task
     * of a
     * repeat follows the rules of the repeat, and a staff member who gets a task gets the notification and the
     * alert of
     * a new task.
     *
     * @return TaskBulkPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(TaskBulkPutRequest $request): TaskBulkPutResponse
    {
        return new TaskBulkPutResponse($this->client->request('/Wl/Task/Manager/TaskBulk.json', $request->params(), 'PUT'));
    }

    /**
     * Removes the tasks that the staff member selected.
     *
     * Removes them all or none (the same removal as `delete()` does for one task, the series of a repeat
     * that is left empty goes too). A task that someone removed already is skipped and counted in `i_skip`.
     *
     * @return TaskBulkDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(TaskBulkDeleteRequest $request): TaskBulkDeleteResponse
    {
        return new TaskBulkDeleteResponse($this->client->request('/Wl/Task/Manager/TaskBulk.json', $request->params(), 'DELETE'));
    }
}
