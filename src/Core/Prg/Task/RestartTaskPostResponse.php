<?php

namespace WlSdk\Core\Prg\Task;

/**
 * Response from POST
 */
class RestartTaskPostResponse
{
    /**
     * List of failed task IDs (copy of CmsTaskQueueSql.`s_id` values) of the queued task to be restarted.
     *
     * @var array|null
     */
    public ?array $a_task_fail = null;

    /**
     * List of task IDs (copy of CmsTaskQueueSql.`s_id` values) which were restarted.
     *
     * @var array|null
     */
    public ?array $a_task_restarted = null;

    public function __construct(array $data)
    {
        $this->a_task_fail = isset($data['a_task_fail']) ? (array)$data['a_task_fail'] : null;
        $this->a_task_restarted = isset($data['a_task_restarted']) ? (array)$data['a_task_restarted'] : null;
    }
}
