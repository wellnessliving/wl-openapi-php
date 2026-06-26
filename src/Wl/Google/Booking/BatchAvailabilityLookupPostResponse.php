<?php

namespace WlSdk\Wl\Google\Booking;

/**
 * Response from POST
 */
class BatchAvailabilityLookupPostResponse
{
    /**
     * Availability slot times.
     *
     * @var array|null
     */
    public ?array $a_slot_time_availability = null;

    public function __construct(array $data)
    {
        $this->a_slot_time_availability = isset($data['a_slot_time_availability']) ? (array)$data['a_slot_time_availability'] : null;
    }
}
