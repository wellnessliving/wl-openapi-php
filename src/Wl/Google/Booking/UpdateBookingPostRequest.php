<?php

namespace WlSdk\Wl\Google\Booking;

class UpdateBookingPostRequest
{
    /**
     * Booking to be updated.
     *
     * @var array|null
     */
    public ?array $o_booking_entity = null;

    public function params(): array
    {
        return array_filter(
            [
            'o_booking_entity' => $this->o_booking_entity,
            ],
            static fn ($v) => $v !== null
        );
    }
}
