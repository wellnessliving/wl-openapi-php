<?php

namespace WlSdk\Wl\Staff\Role;

/**
 * Response from GET
 */
class StaffRoleGetResponse
{
    /**
     * List of staff roles.
     *
     * @var StaffRoleGetResponseStaffRole|null
     */
    public ?StaffRoleGetResponseStaffRole $a_staff_role = null;

    /**
     * Whether current user has privilege to change staff roles.
     *
     * @var bool|null
     */
    public ?bool $can_privilege = null;

    public function __construct(array $data)
    {
        $this->a_staff_role = isset($data['a_staff_role']) ? new StaffRoleGetResponseStaffRole((array)$data['a_staff_role']) : null;
        $this->can_privilege = isset($data['can_privilege']) ? (bool)$data['can_privilege'] : null;
    }
}
