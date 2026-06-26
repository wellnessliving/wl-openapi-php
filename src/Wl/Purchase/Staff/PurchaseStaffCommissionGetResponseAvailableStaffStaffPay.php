<?php

namespace WlSdk\Wl\Purchase\Staff;

class PurchaseStaffCommissionGetResponseAvailableStaffStaffPay
{
    /**
     * `true` if pay rate is applied for purchase; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    /**
     * Pay rate key, primary key in RsStaffPaySql.
     *
     * @var string|null
     */
    public ?string $k_staff_pay = null;

    /**
     * Pay rate title.
     *
     * @var string|null
     */
    public ?string $text_pay_title = null;

    public function __construct(array $data)
    {
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
        $this->k_staff_pay = isset($data['k_staff_pay']) ? (string)$data['k_staff_pay'] : null;
        $this->text_pay_title = isset($data['text_pay_title']) ? (string)$data['text_pay_title'] : null;
    }
}
