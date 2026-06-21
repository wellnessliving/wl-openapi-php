<?php

namespace WlSdk\Wl\Appointment\Book\Schedule;

/**
 * Response from GET
 */
class DayTimeGetResponse
{
    /**
     * An array with a schedule of available appointment booking times.
     *
     * @var DayTimeGetResponseTime|null
     */
    public ?DayTimeGetResponseTime $a_time = null;

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
        $this->a_time = isset($data['a_time']) ? new DayTimeGetResponseTime((array)$data['a_time']) : null;
        $this->dt_date = isset($data['dt_date']) ? (string)$data['dt_date'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_capacity_waitlist = isset($data['i_capacity_waitlist']) ? (int)$data['i_capacity_waitlist'] : null;
        $this->is_waitlist = isset($data['is_waitlist']) ? (bool)$data['is_waitlist'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
