<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastF
{
    /**
     * Number of overdue tasks.
     *
     * @var int|null
     */
    public ?int $i_overdue = null;

    /**
     * New task status of the changed task.
     * 
     * One of [TaskStatusSid](#/components/schemas/Wl.Task.TaskStatusSid).
     *
     * @var int|null
     */
    public ?int $id_task_status = null;

    /**
     * Key of the changed task.
     *
     * @var string|null
     */
    public ?string $k_task = null;

    public function __construct(array $data)
    {
        $this->i_overdue = isset($data['i_overdue']) ? (int)$data['i_overdue'] : null;
        $this->id_task_status = isset($data['id_task_status']) ? (int)$data['id_task_status'] : null;
        $this->k_task = isset($data['k_task']) ? (string)$data['k_task'] : null;
    }
}
