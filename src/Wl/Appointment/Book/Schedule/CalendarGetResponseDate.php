<?php
namespace WlSdk\Wl\Appointment\Book\Schedule;

class CalendarGetResponseDate
{
    /**
     * Date item of the calendar.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Number of day in week.
     *
     * @var int|null
     */
    public ?int $i_week = null;

    /**
     * Whether booking is available for this day.
     *
     * @var bool|null
     */
    public ?bool $is_available = null;

    /**
     * Whether date is current.
     *
     * @var bool|null
     */
    public ?bool $is_current = null;

    /**
     * Whether date is out of current month or it's business/location closed date.
     *
     * @var bool|null
     */
    public ?bool $is_out = null;

    /**
     * Whether booking for this day available only in wait list.
     *
     * @var bool|null
     */
    public ?bool $is_waitlist_only = null;

    /**
     * Whether date is last day of the week.
     *
     * @var bool|null
     */
    public ?bool $is_week_end = null;

    /**
     * Whether date is first day of the week.
     *
     * @var bool|null
     */
    public ?bool $is_week_start = null;

    /**
     * String representation of day number with leading zeroes.
     *
     * @var string|null
     */
    public ?string $s_day = null;

    /**
     * String representation of week day (one letter, i.e. "F").
     *
     * @var string|null
     */
    public ?string $s_week = null;

    public function __construct(array $data)
    {
        $this->dt_date = isset($data['dt_date']) ? (string)$data['dt_date'] : null;
        $this->i_week = isset($data['i_week']) ? (int)$data['i_week'] : null;
        $this->is_available = isset($data['is_available']) ? (bool)$data['is_available'] : null;
        $this->is_current = isset($data['is_current']) ? (bool)$data['is_current'] : null;
        $this->is_out = isset($data['is_out']) ? (bool)$data['is_out'] : null;
        $this->is_waitlist_only = isset($data['is_waitlist_only']) ? (bool)$data['is_waitlist_only'] : null;
        $this->is_week_end = isset($data['is_week_end']) ? (bool)$data['is_week_end'] : null;
        $this->is_week_start = isset($data['is_week_start']) ? (bool)$data['is_week_start'] : null;
        $this->s_day = isset($data['s_day']) ? (string)$data['s_day'] : null;
        $this->s_week = isset($data['s_week']) ? (string)$data['s_week'] : null;
    }
}
