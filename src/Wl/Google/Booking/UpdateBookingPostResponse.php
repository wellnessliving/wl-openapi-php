<?php

namespace WlSdk\Wl\Google\Booking;

/**
 * Response from POST
 */
class UpdateBookingPostResponse
{
    /**
     * Information about booking.
     *
     * @var array|null
     */
    public ?array $a_booking = null;

    /**
     * Information about failure.
     *
     * @var array|null
     */
    public ?array $a_booking_failure = null;

    public function __construct(array $data)
    {
        $this->a_booking = isset($data['a_booking']) ? (array)$data['a_booking'] : null;
        $this->a_booking_failure = isset($data['a_booking_failure']) ? (array)$data['a_booking_failure'] : null;
    }
}
