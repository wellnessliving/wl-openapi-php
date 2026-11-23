<?php

namespace WlSdk\Wl\Task\Edit;

/**
 * Response from GET
 */
class EditGetResponse
{
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
     * `null` means not set. When a task is changed by `put()`, the client to assign to the task: the task
     * gets this client, or its client is replaced by this one. `null` there leaves the client of the task as it
     * is.
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

    public function __construct(array $data)
    {
        $this->a_repeat_day_week = isset($data['a_repeat_day_week']) ? (array)$data['a_repeat_day_week'] : null;
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
        $this->a_uid_staff = isset($data['a_uid_staff']) ? (array)$data['a_uid_staff'] : null;
        $this->dl_due = isset($data['dl_due']) ? (string)$data['dl_due'] : null;
        $this->dl_repeat_end = isset($data['dl_repeat_end']) ? (string)$data['dl_repeat_end'] : null;
        $this->i_repeat_day_month = isset($data['i_repeat_day_month']) ? (int)$data['i_repeat_day_month'] : null;
        $this->i_repeat_end_count = isset($data['i_repeat_end_count']) ? (int)$data['i_repeat_end_count'] : null;
        $this->i_repeat_every = isset($data['i_repeat_every']) ? (int)$data['i_repeat_every'] : null;
        $this->i_repeat_month_order = isset($data['i_repeat_month_order']) ? (int)$data['i_repeat_month_order'] : null;
        $this->id_repeat_end = isset($data['id_repeat_end']) ? (int)$data['id_repeat_end'] : null;
        $this->id_repeat_mode = isset($data['id_repeat_mode']) ? (int)$data['id_repeat_mode'] : null;
        $this->id_repeat_month = isset($data['id_repeat_month']) ? (int)$data['id_repeat_month'] : null;
        $this->id_repeat_month_weekday = isset($data['id_repeat_month_weekday']) ? (int)$data['id_repeat_month_weekday'] : null;
        $this->id_repeat_unit = isset($data['id_repeat_unit']) ? (int)$data['id_repeat_unit'] : null;
        $this->id_task_status = isset($data['id_task_status']) ? (int)$data['id_task_status'] : null;
        $this->is_repeat = isset($data['is_repeat']) ? (bool)$data['is_repeat'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->tl_due = isset($data['tl_due']) ? (string)$data['tl_due'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->xml_description = isset($data['xml_description']) ? (string)$data['xml_description'] : null;
    }
}
