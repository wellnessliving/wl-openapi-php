<?php
namespace WlSdk\Wl\Event;

class EventListGetRequest
{
    /**
     * List of class keys applied by filter.
     *
     * @var string[]|null
     */
    public ?array $a_class_filter = null;

    /**
     * List of day the week applied by filter {@link \WlSdk\ADateWeekSid}.
     *
     * @var int[]|null
     */
    public ?array $a_day = null;

    /**
     * List of enrollment blocks keys applied by filter.
     *
     * @var string[]|null
     */
    public ?array $a_enrollment_block_filter = null;

    /**
     * List of location keys applied by filter.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * List of staff keys applied by filter.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    /**
     * List of time day applied by filter {@link \WlSdk\RsScheduleTimeSid}.
     *
     * @var int[]|null
     */
    public ?array $a_time = null;

    /**
     * List of IDs to include/exclude virtual events.
     * If the only ID is {@link \WlSdk\Core\Sid\YesNoSid}, only virtual events are included.
     * If the only ID is {@link \WlSdk\Core\Sid\YesNoSid}, only in-person events are included.
     * Otherwise, no filtering is done.
     *
     * @var string[]|null
     */
    public ?array $a_virtual = null;

    /**
     * The end date of the range from which a list of events should be retrieved.
     * 
     * `null` if the range has no end date.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * The start date of the range from which a list of events should be retrieved.
     * 
     * `null` if the range has no start date.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Defines how the event availability flag filter should be applied.
     * 
     * One of {@link \WlSdk\AFlagSid} constants.
     * 
     * * {@link \WlSdk\AFlagSid} to show only available events.
     * * {@link \WlSdk\AFlagSid} to show only unavailable events.
     * * {@link \WlSdk\AFlagSid} to show all events (available and unavailable).
     *
     * @var int|null
     */
    public ?int $id_flag = null;

    /**
     * Determines whether the endpoint is used for backend mode.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * `true` to show even event restricted by booking policies; `false` to show available events only.
     *
     * @var bool|null
     */
    public ?bool $is_ignore_requirement = null;

    /**
     * Determines whether you need to retrieve a list of event sessions regardless of the tab specified in
     * `k_class_tab`.
     * 
     * * `true` - retrieves a list regardless of the specified tab.
     * * `false` - retrieves a list only for the specific tab.
     *
     * @var bool|null
     */
    public ?bool $is_tab_all = null;

    /**
     * The event business key to retrieve a list of all event sessions in business.
     * 
     * `null` to retrieve events from `k_location`.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The event class key to retrieve a list of all event sessions of a specific class.
     * `null` to retrieve a list of event sessions of all classes.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * The class tab key to retrieve a list of event sessions from a specific tab only.
     * An empty value to retrieve a list of event sessions that don't belong to any tab.
     * 
     * Will be ignored in next cases:
     * * `k_skin` specified.
     * * `is_tab_all` is `true`.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * The event location key to retrieve a list of all event sessions in a specific location.
     * 
     * Required if `k_business` isn't specified.
     * `null` if you need to retrieve a list of event sessions in all locations of `k_business`.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The skin key if an event list is used for widget mode.
     * 
     * `k_class_tab` will be ignored for widget mode.
     *
     * @var string|null
     */
    public ?string $k_skin = null;

    /**
     * Search string to filter events by name.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    /**
     * The user key.
     * Required to apply specific user rules such as age restrictions.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_class_filter' => $this->a_class_filter,
            'a_day' => $this->a_day,
            'a_enrollment_block_filter' => $this->a_enrollment_block_filter,
            'a_location' => $this->a_location,
            'a_staff' => $this->a_staff,
            'a_time' => $this->a_time,
            'a_virtual' => $this->a_virtual,
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'id_flag' => $this->id_flag,
            'is_backend' => $this->is_backend,
            'is_ignore_requirement' => $this->is_ignore_requirement,
            'is_tab_all' => $this->is_tab_all,
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            'k_class_tab' => $this->k_class_tab,
            'k_location' => $this->k_location,
            'k_skin' => $this->k_skin,
            'text_search' => $this->text_search,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
