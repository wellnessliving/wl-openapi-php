<?php
namespace WlSdk\Wl\Appointment\Book\Schedule;

/**
 * Response from GET
 */
class CalendarApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_date = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_time = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_timezone_data = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_week_name = null;

    /**
     * Whether previous calendar period can be shown (start of shown period later than current date).
     *
     * @var bool|null
     */
    public ?bool $can_backwards = null;

    /**
     * The date to show the available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Maximum number of clients that can simultaneously book this service.
     * `null` for asset bookings where this limit does not apply.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * Maximum number of clients that can be placed on the waitlist for this service.
     * `null` if waitlist is disabled, the waitlist has no capacity limit, or for asset bookings.
     *
     * @var int|null
     */
    public ?int $i_capacity_waitlist = null;

    /**
     * Last day of the week. One of [ADateWeekSid](#/components/schemas/ADateWeekSid) constants.
     *
     * @var int|null
     */
    public ?int $i_week_end = null;

    /**
     * First day of the week. One of [ADateWeekSid](#/components/schemas/ADateWeekSid) constants.
     *
     * @var int|null
     */
    public ?int $i_week_start = null;

    /**
     * Whether list of available times contains slots with only waitlist booking available.
     *
     * @var bool|null
     */
    public ?bool $is_waitlist = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function __construct(array $data)
    {
        $this->a_date = isset($data['a_date']) ? (array)$data['a_date'] : null;
        $this->a_time = isset($data['a_time']) ? (array)$data['a_time'] : null;
        $this->a_timezone_data = isset($data['a_timezone_data']) ? (array)$data['a_timezone_data'] : null;
        $this->a_week_name = isset($data['a_week_name']) ? (array)$data['a_week_name'] : null;
        $this->can_backwards = isset($data['can_backwards']) ? (bool)$data['can_backwards'] : null;
        $this->dt_date = isset($data['dt_date']) ? (string)$data['dt_date'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_capacity_waitlist = isset($data['i_capacity_waitlist']) ? (int)$data['i_capacity_waitlist'] : null;
        $this->i_week_end = isset($data['i_week_end']) ? (int)$data['i_week_end'] : null;
        $this->i_week_start = isset($data['i_week_start']) ? (int)$data['i_week_start'] : null;
        $this->is_waitlist = isset($data['is_waitlist']) ? (bool)$data['is_waitlist'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
