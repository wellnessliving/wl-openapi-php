<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCommission;

class CatalogCommissionGetResponseCommissionDefault
{
    /**
     * @deprecated Staff key. Primary key of RsStaffSql table.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * Staff pay key. Primary key of RsStaffPaySql table.
     *
     * @var string|null
     */
    public ?string $k_staff_pay = null;

    /**
     * User key of staff. Primary key of PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->k_staff_pay = isset($data['k_staff_pay']) ? (string)$data['k_staff_pay'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
