<?php

namespace WlSdk\Wl\Billing\Bulk;

class BulkBillingUserDeleteRequest
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

    /**
     * The user key of the client to remove from the batch.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_purchase_batch' => $this->k_purchase_batch,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
