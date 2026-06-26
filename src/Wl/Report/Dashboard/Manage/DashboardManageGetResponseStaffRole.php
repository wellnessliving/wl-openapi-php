<?php

namespace WlSdk\Wl\Report\Dashboard\Manage;

class DashboardManageGetResponseStaffRole
{
    /**
     * ID of privilege role. Constant from {@link \WlSdk\RsPrivilegeRoleSid}.
     *
     * @var int|null
     * @see \WlSdk\RsPrivilegeRoleSid
     */
    public ?int $id_privilege_role = null;

    /**
     * Key of the business role. Primary key in RsBusinessRoleSql table.
     *
     * @var string|null
     */
    public ?string $k_business_role = null;

    public function __construct(array $data)
    {
        $this->id_privilege_role = isset($data['id_privilege_role']) ? (int)$data['id_privilege_role'] : null;
        $this->k_business_role = isset($data['k_business_role']) ? (string)$data['k_business_role'] : null;
    }
}
