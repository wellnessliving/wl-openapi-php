<?php

namespace WlSdk\Wl\Staff\StaffView;

class StaffViewGetResponseResultListClassDay
{
    /**
     * A list of sessions in the day:
     *
     * @var StaffViewGetResponseResultListClassDayClassPeriod|null
     */
    public ?StaffViewGetResponseResultListClassDayClassPeriod $a_class_period = null;

    /**
     * The day of week. One of {@link \WlSdk\ADateWeekSid} constants.
     *
     * @var int|null
     */
    public ?int $i_day = null;

    public function __construct(array $data)
    {
        $this->a_class_period = isset($data['a_class_period']) ? new StaffViewGetResponseResultListClassDayClassPeriod((array)$data['a_class_period']) : null;
        $this->i_day = isset($data['i_day']) ? (int)$data['i_day'] : null;
    }
}
