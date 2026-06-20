<?php
namespace WlSdk\Wl\Appointment\Book\Schedule;

class CalendarGetResponseTime
{
    /**
     * Date of the calendar.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * The count of clients that have already booked this appointment.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * Integer representation of appointment schedule time.
     *
     * @var int|null
     */
    public ?int $i_time = null;

    /**
     * The count of clients on the waiting list for this appointment.
     *
     * @var int|null
     */
    public ?int $i_wait = null;

    /**
     * Whether the appointment can be booked only in a wait list.
     *
     * @var bool|null
     */
    public ?bool $is_waitlist = null;

    /**
     * @deprecated If this time is already occupied by any client and staff member (but service capacity is not
     * exhausted),
     *   this key contains key of staff member.  Otherwise - `0`.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * If this time is already occupied by any client and staff member (but service capacity is not exhausted),
     *   this key contains user key of staff member.  Otherwise - `0`.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * String representation of appointment schedule time.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->dt_date = isset($data['dt_date']) ? (string)$data['dt_date'] : null;
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->i_time = isset($data['i_time']) ? (int)$data['i_time'] : null;
        $this->i_wait = isset($data['i_wait']) ? (int)$data['i_wait'] : null;
        $this->is_waitlist = isset($data['is_waitlist']) ? (bool)$data['is_waitlist'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
