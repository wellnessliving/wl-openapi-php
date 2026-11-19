<?php

namespace WlSdk\Wl\Task\Manager;

class TaskManagerListGetResponseViewRole
{
    /**
     * The tasks that are not completed, of the staff members who have the role now.
     *
     * @var int|null
     */
    public ?int $i_task = null;

    /**
     * The system role. One of {@link \WlSdk\RsPrivilegeRoleSid} constants. `null` for a role of the business that
     * is
     * based on no system role.
     *
     * @var int|null
     * @see \WlSdk\RsPrivilegeRoleSid
     */
    public ?int $id_privilege_role = null;

    /**
     * Key of the role of the business.  `null` for a
     * system role that the business has not changed.
     *
     * @var string|null
     */
    public ?string $k_business_role = null;

    /**
     * Title of the role.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_task = isset($data['i_task']) ? (int)$data['i_task'] : null;
        $this->id_privilege_role = isset($data['id_privilege_role']) ? (int)$data['id_privilege_role'] : null;
        $this->k_business_role = isset($data['k_business_role']) ? (string)$data['k_business_role'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
