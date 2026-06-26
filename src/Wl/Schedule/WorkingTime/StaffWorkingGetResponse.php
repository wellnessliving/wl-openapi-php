<?php

namespace WlSdk\Wl\Schedule\WorkingTime;

/**
 * Response from GET
 */
class StaffWorkingGetResponse
{
    /**
     * Staff period.
     *
     * @var array|null
     */
    public ?array $a_staff_period = null;

    public function __construct(array $data)
    {
        $this->a_staff_period = isset($data['a_staff_period']) ? (array)$data['a_staff_period'] : null;
    }
}
