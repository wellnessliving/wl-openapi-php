<?php
namespace WlSdk\Wl\Schedule;

use WlSdk\WlSdkClient;

/**
 * Finds the nearest class session that can be booked by the current user.
 */
class ScheduleAvailableDateApi
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
     * Class keys to filter.

Empty to search for all classes.
     *
     * @var string[]|null
     */
    public ?array $a_class = null;

    /**
     * IDs of week days from [ADateWeekSid](#/components/schemas/ADateWeekSid) class.

Empty to search for all week days.
     *
     * @var int[]|null
     */
    public ?array $a_day = null;

    /**
     * Event keys to filter.

Empty to search for all events.
     *
     * @var string[]|null
     */
    public ?array $a_event = null;

    /**
     * Location keys to filter.

Empty to search in all locations.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Staff member keys to filter.

Empty to search for all staff members.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    /**
     * Time interval:


Empty to search for all time.
     *
     * @var array[]|null
     */
    public ?array $a_time = null;

    /**
     * The date/time to start from in UTC.
     *
     * @var string|null
     */
    public ?string $dtu_start = null;

    /**
     * "Book now" tab ID. One of [TabSid](#/components/schemas/Wl.Classes.Tab.TabSid) constants.
     *
     * @var int|null
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
`false` to include only in-person;
`null` to no filtering.
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Finds the nearest class session that can be booked by the current user.
     *
     * Looks no further than `PERIOD_LIMIT` seconds ahead from the start date.
     *
     * @return array Parsed JSON response data.
     *   - string dl_next_available: Nearest session date available for booking in user's or business timezone.

`null` if there is no suitable session found.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Schedule/ScheduleAvailableDate.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
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
            static fn($v) => $v !== null
        );
    }
}
