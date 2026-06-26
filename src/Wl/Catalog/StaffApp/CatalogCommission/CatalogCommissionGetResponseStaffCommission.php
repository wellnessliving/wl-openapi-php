<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCommission;

class CatalogCommissionGetResponseStaffCommission
{
    /**
     * Rate of staff commission.
     *
     * @var string|null
     */
    public ?string $f_rate = null;

    /**
     * One of {@link \WlSdk\RsCommissionTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsCommissionTypeSid
     */
    public ?int $id_commission_type = null;

    /**
     * `true` - if it is default commission for the staff,`false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * Title of the commission.
     *
     * @var string|null
     */
    public ?string $html_commission = null;

    /**
     * Staff pay key. Primary key of RsStaffPaySql table.
     *
     * @var string|null
     */
    public ?string $k_staff_pay = null;

    public function __construct(array $data)
    {
        $this->f_rate = isset($data['f_rate']) ? (string)$data['f_rate'] : null;
        $this->id_commission_type = isset($data['id_commission_type']) ? (int)$data['id_commission_type'] : null;
        $this->is_default = isset($data['is_default']) ? (bool)$data['is_default'] : null;
        $this->html_commission = isset($data['html_commission']) ? (string)$data['html_commission'] : null;
        $this->k_staff_pay = isset($data['k_staff_pay']) ? (string)$data['k_staff_pay'] : null;
    }
}
