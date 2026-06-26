<?php

namespace WlSdk\Wl\Appointment\Wizard\Recurring;

class RecurringListGetRequest
{
    /**
     * Days, when sessions should be booked.
     *
     * @var int[]|null
     */
    public ?array $a_day = null;

    /**
     * Date when recurring period ends.
     *
     * @var string|null
     */
    public ?string $dt_end = null;

    /**
     * Date when recurring period starts.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * Time in mysql format, when each session should be started.
     *
     * @var string|null
     */
    public ?string $dt_time = null;

    /**
     * Fixed count of sessions to be booked.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * Count of period between booked sessions.
     *
     * @var int|null
     */
    public ?int $i_period = null;

    /**
     * Duration of the periods between sessions from {@link \WlSdk\ADurationSid}.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_duration = null;

    /**
     * Type of the rule, when repeatable sessions should end from {@link \WlSdk\RsRepeatEndSid}.
     *
     * @var int|null
     * @see \WlSdk\RsRepeatEndSid
     */
    public ?int $id_end = null;

    /**
     * Whether sessions should be connected to the day of month or day of week.
     *
     * `true` means to book the same day of month, `false` - the same day of week.
     *
     * @var bool|null
     */
    public ?bool $is_month = null;

    /**
     * Unique ID that defines appointment booking wizard.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_day' => $this->a_day,
            'dt_end' => $this->dt_end,
            'dt_start' => $this->dt_start,
            'dt_time' => $this->dt_time,
            'i_count' => $this->i_count,
            'i_period' => $this->i_period,
            'id_duration' => $this->id_duration,
            'id_end' => $this->id_end,
            'is_month' => $this->is_month,
            's_id' => $this->s_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
