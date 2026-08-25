<?php

namespace WlSdk\Wl\Billing\Bulk;

class BulkBillingPutRequest
{
    /**
     * The scheduled billing time:
     *
     * @var array|null
     */
    public ?array $a_schedule_time = null;

    /**
     * The scheduled billing date (business local time).
     * When `null` the billing runs immediately.
     *
     * @var string|null
     */
    public ?string $dl_schedule = null;

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
            'a_schedule_time' => $this->a_schedule_time,
            'dl_schedule' => $this->dl_schedule,
            'k_business' => $this->k_business,
            'k_purchase_batch' => $this->k_purchase_batch,
            ],
            static fn ($v) => $v !== null
        );
    }
}
