<?php
namespace WlSdk\Wl\Book\Process\Frequency;

use WlSdk\WlSdkClient;

/**
 * Returns the list of visits to be created for the given recurring booking settings.
 */
class RepeatParallelApi
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
     * List of days of the week to create visits. Each value is a [ADateWeekSid](#/components/schemas/ADateWeekSid) constant.
     *
     * @var int[]|null
     */
    public ?array $a_day = null;

    /**
     * List of visits to be ignored. Each value is a string consisting of a class period key
and a visit date and time in location's timezone, concatenated by two colons. Empty array if no visits
should be ignored. Example: ['70::2024-11-05 18:00:00'].
     *
     * @var string[]|null
     */
    public ?array $a_visit_ignore = null;

    /**
     * Date and time of the class, when recurring booking was called, in UTC timezone.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Date to start recurring booking. Not empty only when [RepeatApi](/Wl/Book/Process/Frequency/Repeat.json) == [RsRepeatEndSid::DATE](#/components/schemas/RsRepeatEndSid).
     *
     * @var string|null
     */
    public ?string $dt_from = null;

    /**
     * Date to finish recurring booking. Not empty only when [RepeatApi](/Wl/Book/Process/Frequency/Repeat.json) == [RsRepeatEndSid::DATE](#/components/schemas/RsRepeatEndSid).
     *
     * @var string|null
     */
    public ?string $dt_to = null;

    /**
     * Count of the visits to be created. Not empty only when [RepeatApi](/Wl/Book/Process/Frequency/Repeat.json) == [RsRepeatEndSid::COUNT](#/components/schemas/RsRepeatEndSid).
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * Count of days\weeks\months between recurring bookings.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Recurring booking interval, one of [ADurationSid](#/components/schemas/ADurationSid) constants.
     *
     * @var int|null
     */
    public ?int $id_duration = null;

    /**
     * WellnessLiving mode, one of [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * Type of repeating, one of [RsRepeatEndSid](#/components/schemas/RsRepeatEndSid) constants.
     *
     * @var int|null
     */
    public ?int $id_repeat_end = null;

    /**
     * `true` when cancelling booking, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_cancel = null;

    /**
     * `true` to also include sessions running in parallel at the same time and location
 (other class period series); `false` to return only the selected series (parent
 period and its reschedules).

Controlled by the "Also include other sessions happening at the same time" toggle on the form.
Defaults to `false`.
     *
     * @var bool|null
     */
    public ?bool $is_include_parallel = null;

    /**
     * `true` if current user is not created yet, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_new_user = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Encoded list of user keys, who will attend visits.
     *
     * @var string|null
     */
    public ?string $s_uid = null;

    /**
     * Key of user, who will attend visits.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Key of user, who perform booking.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of visits to be created for the given recurring booking settings.
     *
     * Accepts the class period, date, user, recurrence configuration (interval, end condition, and days of week),
     * and returns a list of individual visit slots with availability and alert information for each occurrence,
     * together with the computed date range and visit count.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_visit: No description.
     *   - string dt_from: Date to start recurring booking. Not empty only when [RepeatApi](/Wl/Book/Process/Frequency/Repeat.json) == [RsRepeatEndSid::DATE](#/components/schemas/RsRepeatEndSid).
     *   - string dt_to: Date to finish recurring booking. Not empty only when [RepeatApi](/Wl/Book/Process/Frequency/Repeat.json) == [RsRepeatEndSid::DATE](#/components/schemas/RsRepeatEndSid).
     *   - int i_count: Count of the visits to be created. Not empty only when [RepeatApi](/Wl/Book/Process/Frequency/Repeat.json) == [RsRepeatEndSid::COUNT](#/components/schemas/RsRepeatEndSid).
     *   - string text_date_from: Start date of repeatable period in human-readable format.
     *   - string text_date_to: End date of repeatable period in human-readable format.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Book/Process/Frequency/RepeatParallel.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_day' => $this->a_day,
            'a_visit_ignore' => $this->a_visit_ignore,
            'dt_date' => $this->dt_date,
            'dt_from' => $this->dt_from,
            'dt_to' => $this->dt_to,
            'i_count' => $this->i_count,
            'i_duration' => $this->i_duration,
            'id_duration' => $this->id_duration,
            'id_mode' => $this->id_mode,
            'id_repeat_end' => $this->id_repeat_end,
            'is_cancel' => $this->is_cancel,
            'is_include_parallel' => $this->is_include_parallel,
            'is_new_user' => $this->is_new_user,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            's_uid' => $this->s_uid,
            'uid' => $this->uid,
            'uid_actor' => $this->uid_actor,
            ],
            static fn($v) => $v !== null
        );
    }
}
