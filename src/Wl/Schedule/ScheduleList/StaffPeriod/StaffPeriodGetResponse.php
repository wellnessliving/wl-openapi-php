<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffPeriod;

/**
 * Response from GET
 */
class StaffPeriodGetResponse
{
    /**
     * Working hours list keyed by `uid_staff`.
     * For applications in the `APPS_USE_OLD_K_STAFF` allow-list, keys are legacy `k_staff`.
     *
     * Each value describes the working hours of the staff member for the requested date:
     *
     * @var array|null
     */
    public ?array $a_staff_period = null;

    public function __construct(array $data)
    {
        $this->a_staff_period = isset($data['a_staff_period']) ? (array)$data['a_staff_period'] : null;
    }
}
