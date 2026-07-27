<?php

namespace WlSdk\Wl\Billing\Bulk;

class BulkBillingDeleteRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The purchase batch key.
     *
     * @var string|null
     */
    public ?string $k_purchase_batch = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_purchase_batch' => $this->k_purchase_batch,
            ],
            static fn ($v) => $v !== null
        );
    }
}
