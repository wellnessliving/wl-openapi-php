<?php

namespace WlSdk\Wl\Google\Booking;

class CheckAvailabilityPostRequest
{
    /**
     * The appointment slot that is being checked.
     *
     * @var array|null
     */
    public ?array $o_slot = null;

    public function params(): array
    {
        return array_filter(
            [
            'o_slot' => $this->o_slot,
            ],
            static fn ($v) => $v !== null
        );
    }
}
