<?php

namespace WlSdk\Wl\Schedule\Config\Availability;

/**
 * Response from GET
 */
class AvailabilityScheduleGetResponse
{
    /**
     * List of staff members with services they have during the given date range.
     *
     * @var array|null
     */
    public ?array $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
    }
}
