<?php

namespace WlSdk\Core\Prg\Task;

class RestartTaskPostRequest
{
    /**
     * List of task IDs (copy of  CmsTaskQueueSql.`s_id` values) of the queued task to restart.
     *
     * @var string[]|null
     */
    public ?array $a_task = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_task' => $this->a_task,
            ],
            static fn ($v) => $v !== null
        );
    }
}
