<?php

namespace WlSdk\Wl\Task\Manager;

/**
 * Response from PUT
 */
class TaskBulkPutResponse
{
    /**
     * How many of the selected tasks the request changed (or removed, or reminded of).
     *
     * @var int|null
     */
    public ?int $i_done = null;

    /**
     * How many of the selected tasks the request skipped: a task that someone removed after the staff member
     * selected
     * it, for the reminder a task that has nobody assigned to it, and for the status alone a task that has the
     * status
     * already (nothing is changed in it). `i_done` and `i_skip` together make the number of the selected tasks.
     *
     * @var int|null
     */
    public ?int $i_skip = null;

    public function __construct(array $data)
    {
        $this->i_done = isset($data['i_done']) ? (int)$data['i_done'] : null;
        $this->i_skip = isset($data['i_skip']) ? (int)$data['i_skip'] : null;
    }
}
