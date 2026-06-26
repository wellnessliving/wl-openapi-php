<?php

namespace WlSdk\Wl\Google\Booking;

class BatchAvailabilityLookupPostRequest
{
    /**
     * Multiple slot times to be checked for availability.
     *
     * @var array[]|null
     */
    public ?array $a_slot_time = null;

    /**
     * ID of the merchant.
     *
     * @var string|null
     */
    public ?string $s_merchant_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_slot_time' => $this->a_slot_time,
            's_merchant_id' => $this->s_merchant_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
