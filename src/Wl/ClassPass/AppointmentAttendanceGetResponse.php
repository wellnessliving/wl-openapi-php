<?php

namespace WlSdk\Wl\ClassPass;

/**
 * Response from GET
 */
class AppointmentAttendanceGetResponse
{
    /**
     * List of appointment attendees.
     *
     * _Basically here will be only one attendee because `Wellnessliving`
     * do not support multiple attendees for one appointment ID._
     *
     * @var AppointmentAttendanceGetResponseAttendance[]|null
     */
    public ?array $a_attendance = null;

    public function __construct(array $data)
    {
        $this->a_attendance = isset($data['a_attendance']) ? array_map(static fn ($item) => new AppointmentAttendanceGetResponseAttendance((array)$item), (array)$data['a_attendance']) : null;
    }
}
