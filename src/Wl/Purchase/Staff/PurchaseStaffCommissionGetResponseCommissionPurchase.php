<?php

namespace WlSdk\Wl\Purchase\Staff;

class PurchaseStaffCommissionGetResponseCommissionPurchase
{
    /**
     * Staff pay key, primary key in RsStaffPaySql table.
     *
     * @var string|null
     */
    public ?string $k_staff_pay = null;

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
     * Pay rate title.
     *
     * @var string|null
     */
    public ?string $text_pay_title = null;

    /**
     * Staff uid key, primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->k_staff_pay = isset($data['k_staff_pay']) ? (string)$data['k_staff_pay'] : null;
        $this->text_staff_family = isset($data['text_staff_family']) ? (string)$data['text_staff_family'] : null;
        $this->text_staff_name = isset($data['text_staff_name']) ? (string)$data['text_staff_name'] : null;
        $this->text_pay_title = isset($data['text_pay_title']) ? (string)$data['text_pay_title'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
