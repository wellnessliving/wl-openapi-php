<?php

namespace WlSdk\Wl\Google\Booking;

/**
 * Response from POST
 */
class ListBookingsPostResponse
{
    /**
     * List of booking entity. Each element it is result BookingEntity::toArray().
     *
     * @var array[]|null
     */
    public ?array $a_booking_list = null;

    public function __construct(array $data)
    {
        $this->a_booking_list = isset($data['a_booking_list']) ? (array)$data['a_booking_list'] : null;
    }
}
