<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCommission;

class CatalogCommissionGetResponseCommissionDefault
{
    /**
     * <b>Deprecated.</b> Staff key.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * Staff pay key.
     *
     * @var string|null
     */
    public ?string $k_staff_pay = null;

    /**
     * User key of staff.
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
