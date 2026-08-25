<?php

namespace WlSdk\Wl\Appointment\Info;

class InfoGetResponseRepeat
{
    /**
     * Days of week to repeat appointment. Constants from {@link \WlSdk\ADateWeekSid}.
     *
     * @var int[]|null
     */
    public ?array $a_week = null;

    /**
     * Start date for range edit in location timezone.
     *   This is a current appointment date.
     *
     * @var string|null
     */
    public ?string $dl_edit_from = null;

    /**
     * End date for range edit in location timezone.
     *   This is a date of last created appointment in repeatable group.
     *
     * @var string|null
     */
    public ?string $dl_edit_to = null;

    /**
     * Date when the repeat cycle stops, in location timezone.
     * Empty if the repeat cycle does not stop at a certain date.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Number of occurrences after that the repeat cycle stops.
     * `0` if the repeat cycle does not stop after a certain number of occurrences.
     *
     * @var int|null
     */
    public ?int $i_occurrence = null;

    /**
     * Frequency of the repeats. For example, `2` for every second week.
     *
     * @var int|null
     */
    public ?int $i_period = null;

    /**
     * Type of repeat cycle end. One of {@link \WlSdk\RsRepeatEndSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsRepeatEndSid
     */
    public ?int $id_end = null;

    /**
     * Measurement unit of `i_period`. One of {@link \WlSdk\ADurationSid} constants.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_period = null;

    /**
     * `true` if the appointment repeats monthly at the same date.
     * `false` if the appointment repeats monthly at the same week day or does not repeat monthly.
     *
     * @var bool|null
     */
    public ?bool $is_month = null;

    /**
     * Current appointment local start time in MySQL time format (`HH:MM:SS`).
     *  <p><b>WARNING!</b></p>
     *  <p>If the session you are starting the reschedule with was previously changed, its time may NOT match
     *  the time of the remaining sessions.</p>
     *
     * @var string|null
     */
    public ?string $s_time = null;

    public function __construct(array $data)
    {
        $this->a_week = isset($data['a_week']) ? (array)$data['a_week'] : null;
        $this->dl_edit_from = isset($data['dl_edit_from']) ? (string)$data['dl_edit_from'] : null;
        $this->dl_edit_to = isset($data['dl_edit_to']) ? (string)$data['dl_edit_to'] : null;
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->i_occurrence = isset($data['i_occurrence']) ? (int)$data['i_occurrence'] : null;
        $this->i_period = isset($data['i_period']) ? (int)$data['i_period'] : null;
        $this->id_end = isset($data['id_end']) ? (int)$data['id_end'] : null;
        $this->id_period = isset($data['id_period']) ? (int)$data['id_period'] : null;
        $this->is_month = isset($data['is_month']) ? (bool)$data['is_month'] : null;
        $this->s_time = isset($data['s_time']) ? (string)$data['s_time'] : null;
    }
}
