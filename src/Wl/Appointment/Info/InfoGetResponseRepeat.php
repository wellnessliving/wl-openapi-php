<?php

namespace WlSdk\Wl\Appointment\Info;

class InfoGetResponseRepeat
{
    /**
     * Days of week to repeat appointment. Constants from {@link \WlSdk\ADateWeekSid}.
     *
     * @var int[]|null
     */
    public ?array $a_day = null;

    /**
     * Current appointment date in location timezone in MySQL date format.
     *
     * @var string|null
     */
    public ?string $dl_date = null;

    /**
     * Start date for range edit in location timezone in MySQL date format.
     *
     * @var string|null
     */
    public ?string $dl_edit_from = null;

    /**
     * End date for range edit in location timezone in MySQL date format.
     *
     * @var string|null
     */
    public ?string $dl_edit_to = null;

    /**
     * Current appointment local start time in MySQL time format.
     *
     * @var string|null
     */
    public ?string $s_time = null;

    public function __construct(array $data)
    {
        $this->a_day = isset($data['a_day']) ? (array)$data['a_day'] : null;
        $this->dl_date = isset($data['dl_date']) ? (string)$data['dl_date'] : null;
        $this->dl_edit_from = isset($data['dl_edit_from']) ? (string)$data['dl_edit_from'] : null;
        $this->dl_edit_to = isset($data['dl_edit_to']) ? (string)$data['dl_edit_to'] : null;
        $this->s_time = isset($data['s_time']) ? (string)$data['s_time'] : null;
    }
}
