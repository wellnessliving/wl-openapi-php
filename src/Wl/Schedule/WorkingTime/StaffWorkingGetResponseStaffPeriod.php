<?php

namespace WlSdk\Wl\Schedule\WorkingTime;

class StaffWorkingGetResponseStaffPeriod
{
    /**
     * Array with keys as day from range and values - arrays with keys:
     *
     * @var StaffWorkingGetResponseStaffPeriodDay|null
     */
    public ?StaffWorkingGetResponseStaffPeriodDay $dl_day = null;

    public function __construct(array $data)
    {
        $this->dl_day = isset($data['dl_day']) ? new StaffWorkingGetResponseStaffPeriodDay((array)$data['dl_day']) : null;
    }
}
