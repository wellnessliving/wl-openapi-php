<?php

namespace WlSdk\Wl\Schedule\ScheduleDesign;

class ScheduleDesignPostRequest
{
    /**
     * Business key.
     * Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Schedule time interval in minutes. One of {@link \WlSdk\Wl\Schedule\Design\IntervalSid} constants. 0 if not
     * set yet.
     *
     * @var int|null
     * @see \WlSdk\Wl\Schedule\Design\IntervalSid
     */
    public ?int $i_interval = null;

    /**
     * Cell size. One of {@link \WlSdk\Wl\Schedule\Design\CellSid} constants. 0 if not set yet.
     *
     * @var int|null
     * @see \WlSdk\Wl\Schedule\Design\CellSid
     */
    public ?int $id_cell = null;

    /**
     * Option of appointments display. One of {@link \WlSdk\Wl\Schedule\Design\OptionSid} constants. 0 if not set
     * yet.
     *
     * @var int|null
     * @see \WlSdk\Wl\Schedule\Design\OptionSid
     */
    public ?int $id_option = null;

    /**
     * Day ID of the start week.
     *
     * Constant from {@link \WlSdk\Wl\Schedule\Design\WeekDaySid}. 0 if not set yet.
     *
     * @var int|null
     * @see \WlSdk\Wl\Schedule\Design\WeekDaySid
     */
    public ?int $id_start_week = null;

    /**
     * Determines whether to show the first profile alert on the schedule.
     *
     * `true` - to show the first profile alert on the schedule.
     * `false` not to show. `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_appointment_alert = null;

    /**
     * `true` - If needed to show recurring canceled appointments on schedule. `false` - otherwise.
     * Current setting from business schedule design. `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_appointment_cancel_recurring = null;

    /**
     * `true` - If needed to show single canceled appointments on schedule. `false` - otherwise.
     * Current setting from business schedule design. `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_appointment_cancel_single = null;

    /**
     * `true` - If needed to show canceled classes on schedule. `false` - otherwise.
     * Current setting from business schedule design. `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_class_cancel = null;

    /**
     * `true` If needed to show staff unavailable times with diagonal lines, `false` - otherwise.
     * `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_diagonal_staff_busy = null;

    /**
     * Whether sessions can be dragged and dropped on the schedule. `true` if sessions can be dragged and dropped,
     * `false` otherwise. `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_drag_and_drop = null;

    /**
     * Determines whether to show the forms icon on the schedule.
     *
     * `true` means to show the forms icon on the schedule, `false` not to show. `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_form_icon = null;

    /**
     * Determines whether to show icon in the corner.
     *
     * `true` means to show icon in the corner, `false` otherwise. `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_service_icon = null;

    /**
     * Determines whether to show QUICK and SOAP notes preview on the schedule.
     *
     * `true` means to show QUICK and SOAP notes preview on the schedule, `false` not to show. `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_visit_note = null;

    /**
     * `true` - if need to show work note, `false` - otherwise. `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_work_note = null;

    /**
     * Whether only business hours should be shown on schedule. `true` if only business hours should be shown
     * on schedule. `false` otherwise. `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $is_work_only = null;

    /**
     * Cell background color when staff member is available. `null` if not set.
     *
     * @var string|null
     */
    public ?string $s_color_staff_available = null;

    /**
     * Cell background color when staff member is not available. `null` if not set.
     *
     * @var string|null
     */
    public ?string $s_color_staff_busy = null;

    /**
     * Color of staff name when staff was substituted. `null` if not set.
     *
     * @var string|null
     */
    public ?string $s_color_staff_substitute = null;

    /**
     * Whether to scroll schedule to last booked service. `true` to scroll, `false` otherwise. `null` if not set.
     *
     * @var bool|null
     */
    public ?bool $show_booking_after_book = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'i_interval' => $this->i_interval,
            'id_cell' => $this->id_cell,
            'id_option' => $this->id_option,
            'id_start_week' => $this->id_start_week,
            'is_appointment_alert' => $this->is_appointment_alert,
            'is_appointment_cancel_recurring' => $this->is_appointment_cancel_recurring,
            'is_appointment_cancel_single' => $this->is_appointment_cancel_single,
            'is_class_cancel' => $this->is_class_cancel,
            'is_diagonal_staff_busy' => $this->is_diagonal_staff_busy,
            'is_drag_and_drop' => $this->is_drag_and_drop,
            'is_form_icon' => $this->is_form_icon,
            'is_service_icon' => $this->is_service_icon,
            'is_visit_note' => $this->is_visit_note,
            'is_work_note' => $this->is_work_note,
            'is_work_only' => $this->is_work_only,
            's_color_staff_available' => $this->s_color_staff_available,
            's_color_staff_busy' => $this->s_color_staff_busy,
            's_color_staff_substitute' => $this->s_color_staff_substitute,
            'show_booking_after_book' => $this->show_booking_after_book,
            ],
            static fn ($v) => $v !== null
        );
    }
}
