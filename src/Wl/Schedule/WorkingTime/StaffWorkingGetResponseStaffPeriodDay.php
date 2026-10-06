<?php

namespace WlSdk\Wl\Schedule\WorkingTime;

class StaffWorkingGetResponseStaffPeriodDay
{
    /**
     * Hours of break. Keys - primary keys in one of period table; values - arrays with keys:
     *
     * @var StaffWorkingGetResponseStaffPeriodDayBreak|null
     */
    public ?StaffWorkingGetResponseStaffPeriodDayBreak $a_break = null;

    /**
     * Working hours. Each element:
     *
     * @var StaffWorkingGetResponseStaffPeriodDayWork|null
     */
    public ?StaffWorkingGetResponseStaffPeriodDayWork $a_work = null;

    public function __construct(array $data)
    {
        $this->a_break = isset($data['a_break']) ? new StaffWorkingGetResponseStaffPeriodDayBreak((array)$data['a_break']) : null;
        $this->a_work = isset($data['a_work']) ? new StaffWorkingGetResponseStaffPeriodDayWork((array)$data['a_work']) : null;
    }
}
