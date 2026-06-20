<?php
namespace WlSdk\Wl\Login\Attendance;

class AttendanceListByTokenGetResponseListConfirmWaitConfirm
{
    /**
     * The formatted date string (for example, "Monday, Nov 08, 2021").
     *
     * @var string|null
     */
    public ?string $s_day = null;

    /**
     * The formatted time string (for example, "10:00 AM").
     *
     * @var string|null
     */
    public ?string $s_time = null;

    public function __construct(array $data)
    {
        $this->s_day = isset($data['s_day']) ? (string)$data['s_day'] : null;
        $this->s_time = isset($data['s_time']) ? (string)$data['s_time'] : null;
    }
}
