<?php

namespace WlSdk\Wl\Task\Manager;

class TaskManagerListGetResponseView
{
    /**
     * The staff roles of the business that have a staff member whose tasks the user may see, in the order of the
     * setup of the business. Each element has the following structure:
     *
     * @var TaskManagerListGetResponseViewRole|null
     */
    public ?TaskManagerListGetResponseViewRole $a_role = null;

    /**
     * The tasks that are not completed, of every staff member whose tasks the user may see.
     *
     * @var int|null
     */
    public ?int $i_all = null;

    /**
     * The tasks that are not completed, of the signed-in staff member.
     *
     * @var int|null
     */
    public ?int $i_mine = null;

    public function __construct(array $data)
    {
        $this->a_role = isset($data['a_role']) ? new TaskManagerListGetResponseViewRole((array)$data['a_role']) : null;
        $this->i_all = isset($data['i_all']) ? (int)$data['i_all'] : null;
        $this->i_mine = isset($data['i_mine']) ? (int)$data['i_mine'] : null;
    }
}
