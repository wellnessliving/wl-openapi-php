<?php

namespace WlSdk\Wl\Purchase\Staff;

class PurchaseStaffCommissionGetRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_purchase' => $this->k_purchase,
            'k_purchase_item' => $this->k_purchase_item,
            ],
            static fn ($v) => $v !== null
        );
    }
}
