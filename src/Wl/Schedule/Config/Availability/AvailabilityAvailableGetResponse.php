<?php

namespace WlSdk\Wl\Schedule\Config\Availability;

/**
 * Response from GET
 */
class AvailabilityAvailableGetResponse
{
    /**
     * List of staff members with services they have during the given date range.
     *
     * @var array|null
     */
    public ?array $a_staff = null;

    /**
     * `true` if we were not able to calculate staff members for all services in a reasonable time and had to stop
     * calculation.
     * `false` if everthing was calculated.
     *
     * @var bool|null
     */
    public ?bool $is_timeout = null;

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
        $this->is_timeout = isset($data['is_timeout']) ? (bool)$data['is_timeout'] : null;
    }
}
