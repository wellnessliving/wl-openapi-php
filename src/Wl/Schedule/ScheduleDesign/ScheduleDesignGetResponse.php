<?php

namespace WlSdk\Wl\Schedule\ScheduleDesign;

/**
 * Response from GET
 */
class ScheduleDesignGetResponse
{
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

    public function __construct(array $data)
    {
        $this->i_interval = isset($data['i_interval']) ? (int)$data['i_interval'] : null;
        $this->id_cell = isset($data['id_cell']) ? (int)$data['id_cell'] : null;
        $this->id_option = isset($data['id_option']) ? (int)$data['id_option'] : null;
        $this->id_start_week = isset($data['id_start_week']) ? (int)$data['id_start_week'] : null;
        $this->is_appointment_alert = isset($data['is_appointment_alert']) ? (bool)$data['is_appointment_alert'] : null;
        $this->is_appointment_cancel_recurring = isset($data['is_appointment_cancel_recurring']) ? (bool)$data['is_appointment_cancel_recurring'] : null;
        $this->is_appointment_cancel_single = isset($data['is_appointment_cancel_single']) ? (bool)$data['is_appointment_cancel_single'] : null;
        $this->is_class_cancel = isset($data['is_class_cancel']) ? (bool)$data['is_class_cancel'] : null;
        $this->is_diagonal_staff_busy = isset($data['is_diagonal_staff_busy']) ? (bool)$data['is_diagonal_staff_busy'] : null;
        $this->is_drag_and_drop = isset($data['is_drag_and_drop']) ? (bool)$data['is_drag_and_drop'] : null;
        $this->is_form_icon = isset($data['is_form_icon']) ? (bool)$data['is_form_icon'] : null;
        $this->is_service_icon = isset($data['is_service_icon']) ? (bool)$data['is_service_icon'] : null;
        $this->is_visit_note = isset($data['is_visit_note']) ? (bool)$data['is_visit_note'] : null;
        $this->is_work_note = isset($data['is_work_note']) ? (bool)$data['is_work_note'] : null;
        $this->is_work_only = isset($data['is_work_only']) ? (bool)$data['is_work_only'] : null;
        $this->s_color_staff_available = isset($data['s_color_staff_available']) ? (string)$data['s_color_staff_available'] : null;
        $this->s_color_staff_busy = isset($data['s_color_staff_busy']) ? (string)$data['s_color_staff_busy'] : null;
        $this->s_color_staff_substitute = isset($data['s_color_staff_substitute']) ? (string)$data['s_color_staff_substitute'] : null;
        $this->show_booking_after_book = isset($data['show_booking_after_book']) ? (bool)$data['show_booking_after_book'] : null;
    }
}
