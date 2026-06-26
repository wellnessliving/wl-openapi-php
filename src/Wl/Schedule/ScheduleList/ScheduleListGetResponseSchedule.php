<?php

namespace WlSdk\Wl\Schedule\ScheduleList;

class ScheduleListGetResponseSchedule
{
    /**
     * List of staff:
     *
     * @var ScheduleListGetResponseScheduleStaff|null
     */
    public ?ScheduleListGetResponseScheduleStaff $a_staff = null;

    /**
     * `true` - session can be booked. `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_book = null;

    /**
     * Date/time of session start (in local timezone).
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * Date/time of session start (in GMT).
     *
     * @var string|null
     */
    public ?string $dt_date_gmt = null;

    /**
     * Session duration (in minutes).
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * `true` if user can take place in wait list only; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_wait_list = null;

    /**
     * Session ID. Primary key in RsClassPeriodSql table.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Class title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? new ScheduleListGetResponseScheduleStaff((array)$data['a_staff']) : null;
        $this->can_book = isset($data['can_book']) ? (bool)$data['can_book'] : null;
        $this->dt_date_local = isset($data['dt_date_local']) ? (string)$data['dt_date_local'] : null;
        $this->dt_date_gmt = isset($data['dt_date_gmt']) ? (string)$data['dt_date_gmt'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->is_wait_list = isset($data['is_wait_list']) ? (bool)$data['is_wait_list'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
