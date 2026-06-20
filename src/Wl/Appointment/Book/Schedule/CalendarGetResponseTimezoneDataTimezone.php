<?php
namespace WlSdk\Wl\Appointment\Book\Schedule;

class CalendarGetResponseTimezoneDataTimezone
{
    /**
     * Timezone order.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * Timezone shift from UTC in hours.
     *
     * @var int|null
     */
    public ?int $i_shift = null;

    /**
     * `true` for selected timezone - from `k_timezone` param or client's default timezone when param not set.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    /**
     * Timezone key.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * Timezone name.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Timezone abbreviation.
     *
     * @var string|null
     */
    public ?string $text_abbr = null;

    public function __construct(array $data)
    {
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->i_shift = isset($data['i_shift']) ? (int)$data['i_shift'] : null;
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
        $this->k_timezone = isset($data['k_timezone']) ? (string)$data['k_timezone'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_abbr = isset($data['text_abbr']) ? (string)$data['text_abbr'] : null;
    }
}
