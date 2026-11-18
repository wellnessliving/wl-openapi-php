<?php

namespace WlSdk\Wl\Task\Edit;

/**
 * Response from POST
 */
class EditPostResponse
{
    /**
     * Keys of the tasks saved by the request.
     *
     * When a task is added, the task of every staff member of {@link
     * \WlSdk\Wl\Task\Edit\EditGetResponse::$a_uid_staff}, in that order; the
     * first of them is also returned in {@link \WlSdk\Wl\Task\Edit\EditPostResponse::$k_task}. When a task is
     * edited, the edited task alone.
     *
     * @var string[]|null
     */
    public ?array $a_k_task = null;

    /**
     * Task key.
     *
     * `null` means not set.
     *
     * @var string|null
     */
    public ?string $k_task = null;

    public function __construct(array $data)
    {
        $this->a_k_task = isset($data['a_k_task']) ? (array)$data['a_k_task'] : null;
        $this->k_task = isset($data['k_task']) ? (string)$data['k_task'] : null;
    }
}
