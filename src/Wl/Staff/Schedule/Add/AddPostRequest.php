<?php

namespace WlSdk\Wl\Staff\Schedule\Add;

class AddPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * List of working days, constants from {@link \WlSdk\ADateWeekSid}.
     *
     * @var int[]|null
     */
    public ?array $a_day = null;

    /**
     * Services list, each element is a primary key in .
     *
     * Empty list means all services.
     * `null` means not set.
     *
     * @var string[]|null
     */
    public ?array $a_service = null;

    /**
     * End date of working period.
     *
     * @var string|null
     */
    public ?string $dt_end_date = null;

    /**
     * End time.
     *
     * @var string|null
     */
    public ?string $dt_end_time = null;

    /**
     * Start date of working period.
     *
     * @var string|null
     */
    public ?string $dt_start_date = null;

    /**
     * Start time.
     *
     * @var string|null
     */
    public ?string $dt_start_time = null;

    /**
     * Count of the periods which specified in {@link \WlSdk\Wl\Staff\Schedule\Add\Add}.
     *
     * If this field is absent default value  is used.
     *
     * @var int|null
     */
    public ?int $i_repeat = null;

    /**
     * Measuring unit of {@link \WlSdk\Wl\Staff\Schedule\Add\Add}. One of {@link \WlSdk\ADurationSid} constants.
     *
     * If this field is absent default value  is used.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_repeat = null;

    /**
     * Whether model works with available working time.
     *
     * `false` means available working time.
     * `true` means unavailable working time.
     *
     * @var bool|null
     */
    public ?bool $is_break = null;

    /**
     * Whether period is eternal.
     *
     * `true` means on going.
     * `false` means end date will be used.
     *
     * @var bool|null
     */
    public ?bool $is_eternal = null;

    /**
     * Whether all services selected on form.
     *
     * @var bool|null
     */
    public ?bool $is_service_all = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Deprecated staff key.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * Note to working interval.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    /**
     * Staff user key.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_day' => $this->a_day,
            'a_service' => $this->a_service,
            'dt_end_date' => $this->dt_end_date,
            'dt_end_time' => $this->dt_end_time,
            'dt_start_date' => $this->dt_start_date,
            'dt_start_time' => $this->dt_start_time,
            'i_repeat' => $this->i_repeat,
            'id_repeat' => $this->id_repeat,
            'is_break' => $this->is_break,
            'is_eternal' => $this->is_eternal,
            'is_service_all' => $this->is_service_all,
            'k_location' => $this->k_location,
            'k_staff' => $this->k_staff,
            'text_note' => $this->text_note,
            'uid_staff' => $this->uid_staff,
            ],
            static fn ($v) => $v !== null
        );
    }
}
