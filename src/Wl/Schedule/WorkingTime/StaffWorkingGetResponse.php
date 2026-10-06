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
     * @var StaffWorkingGetResponseStaffPeriod|null
     */
    public ?StaffWorkingGetResponseStaffPeriod $a_staff_period = null;

    public function __construct(array $data)
    {
        $this->a_staff_period = isset($data['a_staff_period']) ? new StaffWorkingGetResponseStaffPeriod((array)$data['a_staff_period']) : null;
    }
}
