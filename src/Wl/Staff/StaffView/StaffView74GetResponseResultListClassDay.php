<?php
namespace WlSdk\Wl\Staff\StaffView;

class StaffView74GetResponseResultListClassDay
{
    /**
     * A list of sessions in the day:
     *
     * @var StaffView74GetResponseResultListClassDayClassPeriod|null
     */
    public ?StaffView74GetResponseResultListClassDayClassPeriod $a_class_period = null;

    /**
     * The day of week. One of {@link \WlSdk\ADateWeekSid} constants.
     *
     * @var int|null
     */
    public ?int $i_day = null;

    public function __construct(array $data)
    {
        $this->a_class_period = isset($data['a_class_period']) ? new StaffView74GetResponseResultListClassDayClassPeriod((array)$data['a_class_period']) : null;
        $this->i_day = isset($data['i_day']) ? (int)$data['i_day'] : null;
    }
}
