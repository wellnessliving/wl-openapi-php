<?php

namespace WlSdk\Wl\Purchase\Staff;

class PurchaseStaffCommissionGetResponseFuturePayments
{
    /**
     * Limit of future auto-payments to apply commission. `null`  if not limit.
     *
     * @var int|null
     */
    public ?int $i_future_payments = null;

    /**
     * Count of left of future auto-payments to apply commission. `null`  if not limit.
     *
     * @var int|null
     */
    public ?int $i_future_payments_left = null;

    /**
     * `true` if commission is applied for future auto-payments, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_future_payments = null;

    public function __construct(array $data)
    {
        $this->i_future_payments = isset($data['i_future_payments']) ? (int)$data['i_future_payments'] : null;
        $this->i_future_payments_left = isset($data['i_future_payments_left']) ? (int)$data['i_future_payments_left'] : null;
        $this->is_future_payments = isset($data['is_future_payments']) ? (bool)$data['is_future_payments'] : null;
    }
}
