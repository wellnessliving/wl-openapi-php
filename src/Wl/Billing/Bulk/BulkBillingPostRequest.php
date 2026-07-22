<?php

namespace WlSdk\Wl\Billing\Bulk;

class BulkBillingPostRequest
{
    /**
     * The scheduled billing time:
     *
     * @var array|null
     */
    public ?array $a_schedule_time = null;

    /**
     * The scheduled billing date in `Y-m-d` format (business local time).
     * When empty, the billing runs immediately.
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
     * The unique review id returned by {@link \WlSdk\Wl\Billing\Bulk\PurchaseItemList} that identifies the
     * prepared bulk billing
     *  data in the temporary session.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_schedule_time' => $this->a_schedule_time,
            'dl_schedule' => $this->dl_schedule,
            'k_business' => $this->k_business,
            's_id' => $this->s_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
