<?php

namespace WlSdk\Wl\Task\Staff;

class TaskStaffListGetResponseRole
{
    /**
     * Keys of the users of the staff members who have this role, in the order of `a_staff`, active or not. An
     * empty array if nobody has the role.
     *
     * @var string[]|null
     */
    public ?array $a_uid_staff = null;

    /**
     * The system role. One of {@link \WlSdk\RsPrivilegeRoleSid} constants. `null` for a role of the business that
     * is
     * not based on a system role.
     *
     * @var int|null
     * @see \WlSdk\RsPrivilegeRoleSid
     */
    public ?int $id_privilege_role = null;

    /**
     * Key of the role of the business. `null` for a system role that the business has not changed.
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
        $this->a_uid_staff = isset($data['a_uid_staff']) ? (array)$data['a_uid_staff'] : null;
        $this->id_privilege_role = isset($data['id_privilege_role']) ? (int)$data['id_privilege_role'] : null;
        $this->k_business_role = isset($data['k_business_role']) ? (string)$data['k_business_role'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
