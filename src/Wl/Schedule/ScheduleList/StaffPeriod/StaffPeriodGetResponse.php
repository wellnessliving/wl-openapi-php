<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffPeriod;

/**
 * Response from GET
 */
class StaffPeriodGetResponse
{
    /**
     * Working hours list. See StaffWorkingTime::getWorkingTime() for details.
     *
     * @var array|null
     */
    public ?array $a_staff_period = null;

    public function __construct(array $data)
    {
        $this->a_staff_period = isset($data['a_staff_period']) ? (array)$data['a_staff_period'] : null;
    }
}
