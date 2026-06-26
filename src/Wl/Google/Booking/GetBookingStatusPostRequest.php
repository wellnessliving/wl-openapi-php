<?php

namespace WlSdk\Wl\Google\Booking;

class GetBookingStatusPostRequest
{
    /**
     * ID of the existing booking.
     *
     * @var string|null
     */
    public ?string $s_booking_id = null;

    public function params(): array
    {
        return array_filter(
            [
            's_booking_id' => $this->s_booking_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
