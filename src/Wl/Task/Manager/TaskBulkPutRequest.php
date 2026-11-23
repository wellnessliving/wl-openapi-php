<?php

namespace WlSdk\Wl\Task\Manager;

class TaskBulkPutRequest
{
    /**
     * Keys of the selected tasks, each at most once, no more than 100: the largest size of a page of the Task
     * Manager.
     *
     * @var string[]|null
     */
    public ?array $a_k_task = null;

    /**
     * Key of the business of the Task Manager. In a franchise in the flexible travel mode the tasks of the other
     * businesses of the franchise may be selected too.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The new due date of the tasks, in the time zone of the business, as `2026-12-31`. For `put`; `null` to keep
     * the date
     * of every task, and then the time of the day is kept or changed alone by `tl_due`.
     *
     * @var string|null
     */
    public ?string $dl_due = null;

    /**
     * The new status of the tasks, one of {@link \WlSdk\Wl\Task\TaskStatusSid} constants. For `put`; {@link
     * \WlSdk\Wl\Task\TaskStatusSid}
     * with nothing else given is the "Mark complete" of the page. A task that already has the status keeps it.
     *
     * @var int|null
     * @see \WlSdk\Wl\Task\TaskStatusSid
     */
    public ?int $id_task_status = null;

    /**
     * Whether `put` takes the client off the tasks ("No client"). Not given together with `uid`.
     *
     * @var bool|null
     */
    public ?bool $is_client_clear = null;

    /**
     * The new due time of the tasks, in the time zone of the business, as `09:30:00`. For `put`; `null` to keep
     * the time
     * of every task.
     *
     * @var string|null
     */
    public ?string $tl_due = null;

    /**
     * Key of the client to put to the tasks. For `put`; `null` to keep the client of every task. Not given
     * together
     * with `is_client_clear`.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Key of the staff member to assign the tasks to. For `put`; `null` to keep the staff of every task. The task
     * gets
     * the staff member instead of the one it had: a task has one.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_k_task' => $this->a_k_task,
            'k_business' => $this->k_business,
            'dl_due' => $this->dl_due,
            'id_task_status' => $this->id_task_status,
            'is_client_clear' => $this->is_client_clear,
            'tl_due' => $this->tl_due,
            'uid' => $this->uid,
            'uid_staff' => $this->uid_staff,
            ],
            static fn ($v) => $v !== null
        );
    }
}
