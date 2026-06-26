<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCommission;

class CatalogCommissionGetResponseStaff
{
    /**
     * List of staff commissions:
     *
     * @var CatalogCommissionGetResponseStaffCommission|null
     */
    public ?CatalogCommissionGetResponseStaffCommission $a_commission = null;

    /**
     * @deprecated Staff key. Primary key of RsStaffSql table. It's use `uid` instead of this field.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * Name of staff.
     *
     * @var string|null
     */
    public ?string $html_name = null;

    /**
     * User key. Primary key of PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_commission = isset($data['a_commission']) ? new CatalogCommissionGetResponseStaffCommission((array)$data['a_commission']) : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->html_name = isset($data['html_name']) ? (string)$data['html_name'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
