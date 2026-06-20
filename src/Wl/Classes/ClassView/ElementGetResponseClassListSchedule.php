<?php
namespace WlSdk\Wl\Classes\ClassView;

class ElementGetResponseClassListSchedule
{
    /**
     * Schedule repeat options:
     *
     * @var ElementGetResponseClassListScheduleRepeat|null
     */
    public ?ElementGetResponseClassListScheduleRepeat $a_repeat = null;

    /**
     * A list of staff member keys that provide sessions for this schedule.
     *
     * @var string[]|null
     */
    public ?array $a_staff_key = null;

    /**
     * A list of staff member keys UID that provide sessions for this schedule.
     *
     * @var string[]|null
     */
    public ?array $a_uid_staff_key = null;

    /**
     * The end date of the schedule in the location's time zone.
     * This will be empty or zero if the schedule is ongoing.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * The start date of the schedule in location's time zone.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * The day of the week, where the class schedule exists, starting with 1 for Monday and ending with 7 for
     * Sunday.
     *
     * @var int|null
     */
    public ?int $i_day = null;

    /**
     * The duration of the schedule sessions in minutes.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Defines whether the schedule canceled or not.
     *
     * @var bool|null
     */
    public ?bool $is_cancel = null;

    /**
     * The location key of the schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The price of a single session of the schedule.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The room of the class period.
     *
     * @var string|null
     */
    public ?string $text_room = null;

    /**
     * The time of the session in the following format: `[start_time] - [end_time]` in the locale's time zone.
     *
     * @var string|null
     */
    public ?string $text_time = null;

    public function __construct(array $data)
    {
        $this->a_repeat = isset($data['a_repeat']) ? new ElementGetResponseClassListScheduleRepeat((array)$data['a_repeat']) : null;
        $this->a_staff_key = isset($data['a_staff_key']) ? (array)$data['a_staff_key'] : null;
        $this->a_uid_staff_key = isset($data['a_uid_staff_key']) ? (array)$data['a_uid_staff_key'] : null;
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
        $this->i_day = isset($data['i_day']) ? (int)$data['i_day'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->is_cancel = isset($data['is_cancel']) ? (bool)$data['is_cancel'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->text_room = isset($data['text_room']) ? (string)$data['text_room'] : null;
        $this->text_time = isset($data['text_time']) ? (string)$data['text_time'] : null;
    }
}
