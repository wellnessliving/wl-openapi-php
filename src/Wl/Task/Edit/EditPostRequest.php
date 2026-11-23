<?php

namespace WlSdk\Wl\Task\Edit;

class EditPostRequest
{
    /**
     * Business key.
     *
     * `null` means not set.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Task key.
     *
     * `null` means not set.
     *
     * @var string|null
     */
    public ?string $k_task = null;

    /**
     * Days of the week of a repeat by weeks on a schedule, each one of {@link \WlSdk\ADateWeekSid}.
     * Empty if the repeat is not by weeks, or if the task does not repeat.
     *
     * @var int[]|null
     */
    public ?array $a_repeat_day_week = null;

    /**
     * List of staff keys assigned to task.
     *
     * Empty array means not set.
     *
     * When a task is added, every staff member gets a task of their own. When a task is edited, exactly one staff
     * member is given.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    /**
     * List of staff user IDs assigned to task.
     *
     * Empty array means not set.
     *
     * When a task is added, every staff member gets a task of their own. When a task is edited, exactly one staff
     * member is given.
     *
     * @var string[]|null
     */
    public ?array $a_uid_staff = null;

    /**
     * Due date.
     *
     * @var string|null
     */
    public ?string $dl_due = null;

    /**
     * Last day, in the time zone of the business, on which the next task is still made, in the MySQL format.
     * `null` if the repeat does not end by a date. Set when {@link
     * \WlSdk\Wl\Task\Edit\EditGetResponse::$id_repeat_end} is {@link \WlSdk\Wl\Task\Repeat\TaskRepeatEndEnum}.
     *
     * @var string|null
     */
    public ?string $dl_repeat_end = null;

    /**
     * Day of the month, 1 to 31, of a repeat by months on a day.
     * `null` if the repeat is not by months on a day. A month that has fewer days gets its last day.
     *
     * @var int|null
     */
    public ?int $i_repeat_day_month = null;

    /**
     * Total number of tasks of the series, the first one included, after which no task is made.
     * `null` if the repeat does not end by a count. Set when {@link
     * \WlSdk\Wl\Task\Edit\EditGetResponse::$id_repeat_end} is {@link \WlSdk\Wl\Task\Repeat\TaskRepeatEndEnum}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Task\Repeat\TaskRepeatEndEnum
     */
    public ?int $i_repeat_end_count = null;

    /**
     * The number of units of the repeat, 1 to 99: every 2 weeks on a schedule, or the gap after the task is
     * completed.
     * `null` if the task does not repeat.
     *
     * @var int|null
     */
    public ?int $i_repeat_every = null;

    /**
     * Number of the weekday in the month of a repeat by months on a weekday: one of {@link
     * \WlSdk\Wl\Task\Repeat\TaskRepeatOrderEnum}, 1 to
     * 4, or 5 for the last one. `null` if the repeat is not by months on a weekday.
     *
     * @var int|null
     * @see \WlSdk\Wl\Task\Repeat\TaskRepeatOrderEnum
     */
    public ?int $i_repeat_month_order = null;

    /**
     * How the series of repeating tasks ends, one of {@link \WlSdk\Wl\Task\Repeat\TaskRepeatEndEnum}.
     * `null` if the task does not repeat.
     *
     * @var int|null
     * @see \WlSdk\Wl\Task\Repeat\TaskRepeatEndEnum
     */
    public ?int $id_repeat_end = null;

    /**
     * When the next task is made, one of {@link \WlSdk\Wl\Task\Repeat\TaskRepeatModeEnum}.
     * `null` if the task does not repeat.
     *
     * @var int|null
     * @see \WlSdk\Wl\Task\Repeat\TaskRepeatModeEnum
     */
    public ?int $id_repeat_mode = null;

    /**
     * How a repeat by months chooses the day, one of {@link \WlSdk\Wl\Task\Repeat\TaskRepeatMonthEnum}.
     * `null` if the repeat is not by months on a schedule.
     *
     * @var int|null
     * @see \WlSdk\Wl\Task\Repeat\TaskRepeatMonthEnum
     */
    public ?int $id_repeat_month = null;

    /**
     * Day of the week of a repeat by months on a weekday, one of {@link \WlSdk\ADateWeekSid}.
     * `null` if the repeat is not by months on a weekday.
     *
     * @var int|null
     * @see \WlSdk\ADateWeekSid
     */
    public ?int $id_repeat_month_weekday = null;

    /**
     * Unit of the repeat, one of {@link \WlSdk\Wl\Task\Repeat\TaskRepeatUnitEnum}.
     * `null` if the task does not repeat.
     *
     * @var int|null
     * @see \WlSdk\Wl\Task\Repeat\TaskRepeatUnitEnum
     */
    public ?int $id_repeat_unit = null;

    /**
     * Task status.
     *
     * `null` means not set.
     *
     * @var int|null
     * @see \WlSdk\Wl\Task\TaskStatusSid
     */
    public ?int $id_task_status = null;

    /**
     * Whether the task repeats. The other properties of the repeat are read only if it is `true`.
     * On a save, `null` leaves the repeat of the task as it is, and `false` turns it off.
     *
     * @var bool|null
     */
    public ?bool $is_repeat = null;

    /**
     * Whether the task had a repeat when the client read it.
     *
     * Optional. An older task of a series shows the rule of the series, and a request that turns the repeat off
     * stops
     * the series only when the client says it read the task with the repeat on. `null` if the client does not send
     * it:
     * then a turn-off on an older task is refused with the code `repeat-series-open`.
     *
     * @var bool|null
     */
    public ?bool $is_repeat_open = null;

    /**
     * Location key.
     *
     * `null` means not set.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Task title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Due time.
     *
     * @var string|null
     */
    public ?string $tl_due = null;

    /**
     * Client's uid for whom connected task.
     *
     * `null` means not set.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Task description.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_task' => $this->k_task,
            'a_repeat_day_week' => $this->a_repeat_day_week,
            'a_staff' => $this->a_staff,
            'a_uid_staff' => $this->a_uid_staff,
            'dl_due' => $this->dl_due,
            'dl_repeat_end' => $this->dl_repeat_end,
            'i_repeat_day_month' => $this->i_repeat_day_month,
            'i_repeat_end_count' => $this->i_repeat_end_count,
            'i_repeat_every' => $this->i_repeat_every,
            'i_repeat_month_order' => $this->i_repeat_month_order,
            'id_repeat_end' => $this->id_repeat_end,
            'id_repeat_mode' => $this->id_repeat_mode,
            'id_repeat_month' => $this->id_repeat_month,
            'id_repeat_month_weekday' => $this->id_repeat_month_weekday,
            'id_repeat_unit' => $this->id_repeat_unit,
            'id_task_status' => $this->id_task_status,
            'is_repeat' => $this->is_repeat,
            'is_repeat_open' => $this->is_repeat_open,
            'k_location' => $this->k_location,
            'text_title' => $this->text_title,
            'tl_due' => $this->tl_due,
            'uid' => $this->uid,
            'xml_description' => $this->xml_description,
            ],
            static fn ($v) => $v !== null
        );
    }
}
