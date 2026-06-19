<?php
namespace WlSdk\Wl\Event;

use WlSdk\WlSdkClient;

/**
 * Returns the list of events matching the specified filter parameters.
 */
class EventListApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * List of class keys applied by filter.
     *
     * @var string[]|null
     */
    public ?array $a_class_filter = null;

    /**
     * List of day the week applied by filter [ADateWeekSid](#/components/schemas/ADateWeekSid).
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
     * List of time day applied by filter [RsScheduleTimeSid](#/components/schemas/RsScheduleTimeSid).
     *
     * @var int[]|null
     */
    public ?array $a_time = null;

    /**
     * List of IDs to include/exclude virtual events.
If the only ID is [YesNoSid::YES](#/components/schemas/Core.Sid.YesNoSid), only virtual events are included.
If the only ID is [YesNoSid::NO](#/components/schemas/Core.Sid.YesNoSid), only in-person events are included.
Otherwise, no filtering is done.
     *
     * @var string[]|null
     */
    public ?array $a_virtual = null;

    /**
     * The end date of the range from which a list of events should be retrieved.

`null` if the range has no end date.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * The start date of the range from which a list of events should be retrieved.

`null` if the range has no start date.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Defines how the event availability flag filter should be applied.

One of [AFlagSid](#/components/schemas/AFlagSid) constants.

* [AFlagSid::ON](#/components/schemas/AFlagSid) to show only available events.
* [AFlagSid::OFF](#/components/schemas/AFlagSid) to show only unavailable events.
* [AFlagSid::ALL](#/components/schemas/AFlagSid) to show all events (available and unavailable).
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
     * Determines whether you need to retrieve a list of event sessions regardless of the tab specified in `k_class_tab`.

* `true` - retrieves a list regardless of the specified tab.
* `false` - retrieves a list only for the specific tab.
     *
     * @var bool|null
     */
    public ?bool $is_tab_all = null;

    /**
     * The event business key to retrieve a list of all event sessions in business.

`null` to retrieve events from `k_location`.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The event class key to retrieve a list of all event sessions of a specific class.
`null` to retrieve a list of event sessions of all classes.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * The class tab key to retrieve a list of event sessions from a specific tab only.
An empty value to retrieve a list of event sessions that don't belong to any tab.

Will be ignored in next cases:
* `k_skin` specified.
* `is_tab_all` is `true`.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * The event location key to retrieve a list of all event sessions in a specific location.

Required if `k_business` isn't specified.
`null` if you need to retrieve a list of event sessions in all locations of `k_business`.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The skin key if an event list is used for widget mode.

`k_class_tab` will be ignored for widget mode.
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
Required to apply specific user rules such as age restrictions.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Model cache reset flag.
     *
     * @var bool|null
     */
    public ?bool $is_cache_reset = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of events matching the specified filter parameters.
     *
     * Used to display the event schedule on business and location pages. Supports filtering by location,
     * date range, staff, and booking status. Results are cached per business and user context; the cache
     * is invalidated automatically when events are modified.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_enrollment_block_list: List of available enrollment blocks matching the requested parameters.

Key is the enrollment block key. 
Value is the title of the first event found in that enrollment block.
     *   - array[] a_event_list: A list of events corresponding to requested parameters.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Event/EventList.json', $this->params(), 'GET');
    }

    /**
     * Resets the event list cache for the specified business and user.
     *
     * Call this after modifying event data to force the next request to rebuild the schedule from the
     * database. Can also conditionally reset without parameters if the caller determines a reset is needed.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Event/EventList.json', $this->params(), 'PUT');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
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
            'is_cache_reset' => $this->is_cache_reset,
            ],
            static fn($v) => $v !== null
        );
    }
}
