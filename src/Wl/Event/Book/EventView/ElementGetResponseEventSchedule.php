<?php
namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetResponseEventSchedule
{
    /**
     * Days of the week when the session occurs.
     * Keys are weekday numbers (1 = Monday, 7 = Sunday),
     * values are always `true`.
     *
     * @var bool[]|null
     */
    public ?array $a_day = null;

    /**
     * Repeat periodicity instructions.
     *
     * @var ElementGetResponseEventScheduleRepeat|null
     */
    public ?ElementGetResponseEventScheduleRepeat $a_repeat = null;

    /**
     * A list of staff members who conduct the session. Every element has the following next keys:
     *
     * @var ElementGetResponseEventScheduleStaff|null
     */
    public ?ElementGetResponseEventScheduleStaff $a_staff = null;

    /**
     * List of virtual locations.
     *
     * @var string[]|null
     */
    public ?array $a_virtual_location = null;

    /**
     * The end date of the session.
     * The local date without time.
     *
     * @var string|null
     */
    public ?string $dt_end = null;

    /**
     * The start date of the session.
     * The local date without time.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * `true` if the location should be hidden in the event details. Hide if the event is virtual or if the
     * business
     * only has one location. `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $hide_location = null;

    /**
     * The class capacity.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * The duration of the class in seconds.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * This will be `true` if the session is not held in person but offered remotely. It will be `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * The price of the session, if it can be purchased separately.
     *
     * @var string|null
     */
    public ?string $f_price = null;

    /**
     * The key of the class period.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The key of the location where the session is held.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The location title.
     *
     * @var string|null
     */
    public ?string $s_location = null;

    /**
     * The time when session occurred.
     * A textual representation of the start and end time of a session. Example: `10:00 am - 11:00 am`
     *
     * @var string|null
     */
    public ?string $s_time = null;

    /**
     * The name of the timezone in which the session is held.
     *
     * @var string|null
     */
    public ?string $s_timezone = null;

    /**
     * The room of the event.
     *
     * @var string|null
     */
    public ?string $text_room = null;

    public function __construct(array $data)
    {
        $this->a_day = isset($data['a_day']) ? (array)$data['a_day'] : null;
        $this->a_repeat = isset($data['a_repeat']) ? new ElementGetResponseEventScheduleRepeat((array)$data['a_repeat']) : null;
        $this->a_staff = isset($data['a_staff']) ? new ElementGetResponseEventScheduleStaff((array)$data['a_staff']) : null;
        $this->a_virtual_location = isset($data['a_virtual_location']) ? (array)$data['a_virtual_location'] : null;
        $this->dt_end = isset($data['dt_end']) ? (string)$data['dt_end'] : null;
        $this->dt_start = isset($data['dt_start']) ? (string)$data['dt_start'] : null;
        $this->hide_location = isset($data['hide_location']) ? (bool)$data['hide_location'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->is_virtual = isset($data['is_virtual']) ? (bool)$data['is_virtual'] : null;
        $this->f_price = isset($data['f_price']) ? (string)$data['f_price'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->s_location = isset($data['s_location']) ? (string)$data['s_location'] : null;
        $this->s_time = isset($data['s_time']) ? (string)$data['s_time'] : null;
        $this->s_timezone = isset($data['s_timezone']) ? (string)$data['s_timezone'] : null;
        $this->text_room = isset($data['text_room']) ? (string)$data['text_room'] : null;
    }
}
