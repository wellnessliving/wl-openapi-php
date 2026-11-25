<?php

namespace WlSdk\Wl\Task\Remind;

use WlSdk\WlSdkClient;

/**
 * Sends the reminder of a task to its staff now.
 */
class TaskRemind
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends the reminder of a task to its staff now.
     *
     * Every staff member who is assigned to the task and is active in its business gets the notification Task
     * reminder,
     * a completed task included, whether the business turned the notification off or not: the email and the push
     * are
     * always sent, the text message only if the business has it on. Nothing of the task changes, and the result is
     * empty.
     *
     * The request is refused, and nothing is sent, when the task does not exist (`task-nx`), nobody is assigned to
     * it
     * (`staff-nx`), every staff member of the task is inactive (`staff-inactive`), or no active staff member of
     * the
     * task has an email or a mobile phone (`staff-channel`). A staff member who may not change the task is refused
     * too
     * (`access-task`).
     *
     * @return TaskRemindPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TaskRemindPostRequest $request): TaskRemindPostResponse
    {
        return new TaskRemindPostResponse($this->client->request('/Wl/Task/Remind/TaskRemind.json', $request->params(), 'POST'));
    }
}
