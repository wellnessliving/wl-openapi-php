<?php

namespace WlSdk\Wl\Task\Manager;

class TaskManagerListGetResponseCount
{
    /**
     * Every task the user may see.
     *
     * @var int|null
     */
    public ?int $i_all = null;

    /**
     * The tasks that are completed.
     *
     * @var int|null
     */
    public ?int $i_complete = null;

    /**
     * The tasks that are not completed: to do and in progress.
     *
     * @var int|null
     */
    public ?int $i_future = null;

    /**
     * The tasks due today, in the time zone of the business.
     *
     * @var int|null
     */
    public ?int $i_today = null;

    public function __construct(array $data)
    {
        $this->i_all = isset($data['i_all']) ? (int)$data['i_all'] : null;
        $this->i_complete = isset($data['i_complete']) ? (int)$data['i_complete'] : null;
        $this->i_future = isset($data['i_future']) ? (int)$data['i_future'] : null;
        $this->i_today = isset($data['i_today']) ? (int)$data['i_today'] : null;
    }
}
