<?php

namespace WlSdk\Wl\Purchase\Staff;

class PurchaseStaffCommissionGetResponseAvailableStaff
{
    /**
     * List of staff pay rates. Every element has next information:
     *
     * @var PurchaseStaffCommissionGetResponseAvailableStaffStaffPay|null
     */
    public ?PurchaseStaffCommissionGetResponseAvailableStaffStaffPay $a_staff_pay = null;

    /**
     * `true` if staff pay rate is applied for purchase; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    /**
     * Staff surname.
     *
     * @var string|null
     */
    public ?string $text_staff_family = null;

    /**
     * Staff name.
     *
     * @var string|null
     */
    public ?string $text_staff_name = null;

    /**
     * Staff uid key, primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->a_staff_pay = isset($data['a_staff_pay']) ? new PurchaseStaffCommissionGetResponseAvailableStaffStaffPay((array)$data['a_staff_pay']) : null;
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
        $this->text_staff_family = isset($data['text_staff_family']) ? (string)$data['text_staff_family'] : null;
        $this->text_staff_name = isset($data['text_staff_name']) ? (string)$data['text_staff_name'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
