<?php

namespace WlSdk\Wl\Purchase\Staff;

class PurchaseStaffCommissionPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Purchase key.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    /**
     * Purchase item key.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * Information about applied staff commission for purchase. Each element has next structure:
     *
     * @var array[]|null
     */
    public ?array $a_commission_purchase = null;

    /**
     * Settings of applied commission for future auto-payments:
     *
     * @var array|null
     */
    public ?array $a_future_payments = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_purchase' => $this->k_purchase,
            'k_purchase_item' => $this->k_purchase_item,
            'a_commission_purchase' => $this->a_commission_purchase,
            'a_future_payments' => $this->a_future_payments,
            ],
            static fn ($v) => $v !== null
        );
    }
}
