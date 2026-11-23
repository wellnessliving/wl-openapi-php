<?php

namespace WlSdk\Wl\Task\Edit;

class EditPutRequest
{
    /**
     * Business key.
     *
     * `null` means not set.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Task key.
     *
     * `null` means not set.
     *
     * @var string|null
     */
    public ?string $k_task = null;

    /**
     * Task status.
     *
     * `null` means not set.
     *
     * @var int|null
     * @see \WlSdk\Wl\Task\TaskStatusSid
     */
    public ?int $id_task_status = null;

    /**
     * Client's uid for whom connected task.
     *
     * `null` means not set. When a task is changed by `put()`, the client to assign to the task: the task
     * gets this client, or its client is replaced by this one. `null` there leaves the client of the task as it
     * is.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_task' => $this->k_task,
            'id_task_status' => $this->id_task_status,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
