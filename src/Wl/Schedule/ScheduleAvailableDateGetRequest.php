<?php

namespace WlSdk\Wl\Schedule;

class ScheduleAvailableDateGetRequest
{
    /**
     * Class keys to filter.
     *
     * Empty to search for all classes.
     *
     * @var string[]|null
     */
    public ?array $a_class = null;

    /**
     * IDs of week days from {@link \WlSdk\ADateWeekSid} class.
     *
     * Empty to search for all week days.
     *
     * @var int[]|null
     */
    public ?array $a_day = null;

    /**
     * Event keys to filter.
     *
     * Empty to search for all events.
     *
     * @var string[]|null
     */
    public ?array $a_event = null;

    /**
     * Location keys to filter.
     *
     * Empty to search in all locations.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Staff member keys to filter.
     *
     * Empty to search for all staff members.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    /**
     * Time interval:
     *
     *
     * Empty to search for all time.
     *
     * @var array|null
     */
    public ?array $a_time = null;

    /**
     * The date/time to start from in UTC.
     *
     * @var string|null
     */
    public ?string $dtu_start = null;

    /**
     * "Book now" tab ID. One of {@link \WlSdk\Wl\Classes\Tab\TabSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Classes\Tab\TabSid
     */
    public ?int $id_class_tab = null;

    /**
     * `true` to include classes; `false` to exclude.
     *
     * @var bool|null
     */
    public ?bool $is_class = null;

    /**
     * `true` to include events; `false` to exclude.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * `true` to include only virtual classes;
     * `false` to include only in-person;
     * `null` to no filtering.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Timezone key.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_class' => $this->a_class,
            'a_day' => $this->a_day,
            'a_event' => $this->a_event,
            'a_location' => $this->a_location,
            'a_staff' => $this->a_staff,
            'a_time' => $this->a_time,
            'dtu_start' => $this->dtu_start,
            'id_class_tab' => $this->id_class_tab,
            'is_class' => $this->is_class,
            'is_event' => $this->is_event,
            'is_virtual' => $this->is_virtual,
            'k_business' => $this->k_business,
            'k_timezone' => $this->k_timezone,
            ],
            static fn ($v) => $v !== null
        );
    }
}
