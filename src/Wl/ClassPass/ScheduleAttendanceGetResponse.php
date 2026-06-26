<?php

namespace WlSdk\Wl\ClassPass;

/**
 * Response from GET
 */
class ScheduleAttendanceGetResponse
{
    /**
     * See ScheduleAttendanceListData::toClassPass() for documentation.
     *
     * @var array|null
     */
    public ?array $a_attendance = null;

    /**
     * See ScheduleAttendanceListData::toClassPass() for documentation.
     *
     * @var array|null
     */
    public ?array $a_pagination = null;

    public function __construct(array $data)
    {
        $this->a_attendance = isset($data['a_attendance']) ? (array)$data['a_attendance'] : null;
        $this->a_pagination = isset($data['a_pagination']) ? (array)$data['a_pagination'] : null;
    }
}
