<?php
namespace WlSdk\Wl\Event;

class EventListGetResponseEventListSchedule
{
    /**
     * List of weekday numbers when event occur.
     *
     * @var int[]|null
     */
    public ?array $a_day = null;

    /**
     * List of staff members providing event session.
     *
     * @var EventListGetResponseEventListScheduleStaffMember|null
     */
    public ?EventListGetResponseEventListScheduleStaffMember $a_staff_member = null;

    /**
     * End date of the schedule in `MySql` format.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Start date of the schedule in `MySql` format.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Whether this is a single day schedule (start and end dates of the schedule are the same).
     *
     * @var bool|null
     */
    public ?bool $is_day = null;

    /**
     * Class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Resource key, which has category ResourceCategoryEnum::LOCATION.
     * Only one such resource can be selected for a schedule.
     * 
     * Empty string, if no off-site location is used.
     * `null` if field is not loaded.
     *
     * @var string|null
     */
    public ?string $k_resource_location = null;

    /**
     * Location title.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * Room where the session takes place.
     *
     * @var string|null
     */
    public ?string $text_room = null;

    /**
     * Start and end time of the scheduled sessions in human readable format.
     *
     * @var string|null
     */
    public ?string $text_time = null;

    public function __construct(array $data)
    {
        $this->a_day = isset($data['a_day']) ? (array)$data['a_day'] : null;
        $this->a_staff_member = isset($data['a_staff_member']) ? new EventListGetResponseEventListScheduleStaffMember((array)$data['a_staff_member']) : null;
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
        $this->is_day = isset($data['is_day']) ? (bool)$data['is_day'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_resource_location = isset($data['k_resource_location']) ? (string)$data['k_resource_location'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->text_room = isset($data['text_room']) ? (string)$data['text_room'] : null;
        $this->text_time = isset($data['text_time']) ? (string)$data['text_time'] : null;
    }
}
