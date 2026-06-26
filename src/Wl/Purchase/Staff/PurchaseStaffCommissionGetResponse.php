<?php

namespace WlSdk\Wl\Purchase\Staff;

/**
 * Response from GET
 */
class PurchaseStaffCommissionGetResponse
{
    /**
     * Information about all staff commission in the business which can be applied for purchase. Every element has
     * next keys:
     *
     * @var PurchaseStaffCommissionGetResponseAvailableStaff|null
     */
    public ?PurchaseStaffCommissionGetResponseAvailableStaff $a_available_staff = null;

    /**
     * Information about applied staff commission for purchase. Each element has next structure:
     *
     * @var PurchaseStaffCommissionGetResponseCommissionPurchase[]|null
     */
    public ?array $a_commission_purchase = null;

    /**
     * Settings of applied commission for future auto-payments:
     *
     * @var PurchaseStaffCommissionGetResponseFuturePayments|null
     */
    public ?PurchaseStaffCommissionGetResponseFuturePayments $a_future_payments = null;

    /**
     * Information about past auto-payments for which the commission has been applied:
     *
     * @var PurchaseStaffCommissionGetResponsePastPayments|null
     */
    public ?PurchaseStaffCommissionGetResponsePastPayments $a_past_payments = null;

    /**
     * Whether current user can override commission or not.
     *
     * @var bool|null
     */
    public ?bool $can_override = null;

    /**
     * Whether the promotion, that was paid by this purchase, is renewable.
     * This determines if the commission can be applied to future auto-payments.
     *
     * @var bool|null
     */
    public ?bool $is_recurring = null;

    public function __construct(array $data)
    {
        $this->a_available_staff = isset($data['a_available_staff']) ? new PurchaseStaffCommissionGetResponseAvailableStaff((array)$data['a_available_staff']) : null;
        $this->a_commission_purchase = isset($data['a_commission_purchase']) ? array_map(static fn ($item) => new PurchaseStaffCommissionGetResponseCommissionPurchase((array)$item), (array)$data['a_commission_purchase']) : null;
        $this->a_future_payments = isset($data['a_future_payments']) ? new PurchaseStaffCommissionGetResponseFuturePayments((array)$data['a_future_payments']) : null;
        $this->a_past_payments = isset($data['a_past_payments']) ? new PurchaseStaffCommissionGetResponsePastPayments((array)$data['a_past_payments']) : null;
        $this->can_override = isset($data['can_override']) ? (bool)$data['can_override'] : null;
        $this->is_recurring = isset($data['is_recurring']) ? (bool)$data['is_recurring'] : null;
    }
}
