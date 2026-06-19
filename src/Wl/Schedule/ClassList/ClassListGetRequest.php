<?php
namespace WlSdk\Wl\Schedule\ClassList;

class ClassListGetRequest
{
    /**
     * The list of classes keys to filter.
     * Return sessions with matching class IDs.
     * 
     * If it's empty, all classes/events will be returned.
     *
     * @var string[]|null
     */
    public ?array $a_class = null;

    /**
     * Class filter by day of the week.
     * Array of number representing the days of the week.
     * Return sessions matching the given weekdays.
     * (7 = Sunday, 1 = Monday, ..., 6 = Saturday)
     * 
     * Empty array means no filtering.
     *
     * @var int[]|null
     */
    public ?array $a_day = null;

    /**
     * The list of location keys to filter results.
     * If it's empty, schedule for all locations will be returned.
     * All given locations should be from the same business, which is sent in `k_business`.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Class filter by time of day.
     * List of arrays with start and end time in "HH:MM" format (24h).
     * Include sessions that start between the specified time range.
     * 
     * Each value is array with time parameters:
     * 
     * 
     * Empty array means no filtering.
     *
     * @var array[]|null
     */
    public ?array $a_time = null;

    /**
     * The list start date in UTC and in MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * The list end date in UTC and in MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_end = null;

    /**
     * `true` means to not generate `a_session` result.
     * Can be used, if you do not need full information about existing classes and result in `a_calendar` is
     * enough.
     *
     * @var bool|null
     */
    public ?bool $is_response_short = null;

    /**
     * If `true`, sessions from every class tab are returned. If `false`, use the
     * `k_class_tab` value.
     *
     * @var bool|null
     */
    public ?bool $is_tab_all = null;

    /**
     * Class filter by type.
     * The class is virtual.
     * 
     * `true`: Only virtual classes.
     * `false`: Only in-person.
     * `null` or not set: No filtering.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The category tab key.
     * 
     * This will be `null` if not set yet.
     * This will be ignored if `is_tab_all` is `true`.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * The list of staff members to filter.
     * A comma separated list of staff keys.
     *
     * @var string|null
     */
    public ?string $s_staff = null;

    /**
     * The list of staff user keys to filter.
     * A comma separated list of staff user keys.
     *
     * @var string|null
     */
    public ?string $s_staff_uid = null;

    /**
     * If `true`, canceled sessions will be returned. If `false`, canceled sessions won't be returned.
     *
     * @var bool|null
     */
    public ?bool $show_cancel = null;

    /**
     * If `true`, classes will be included in the response. `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $show_class = null;

    /**
     * If `true`, events are also returned. If `false`, only classes are returned.
     *
     * @var bool|null
     */
    public ?bool $show_event = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_class' => $this->a_class,
            'a_day' => $this->a_day,
            'a_location' => $this->a_location,
            'a_time' => $this->a_time,
            'dt_date' => $this->dt_date,
            'dt_end' => $this->dt_end,
            'is_response_short' => $this->is_response_short,
            'is_tab_all' => $this->is_tab_all,
            'is_virtual' => $this->is_virtual,
            'k_business' => $this->k_business,
            'k_class_tab' => $this->k_class_tab,
            's_staff' => $this->s_staff,
            's_staff_uid' => $this->s_staff_uid,
            'show_cancel' => $this->show_cancel,
            'show_class' => $this->show_class,
            'show_event' => $this->show_event,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
