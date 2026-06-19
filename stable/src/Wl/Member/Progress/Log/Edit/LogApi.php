<?php
namespace WlSdk\Wl\Member\Progress\Log\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns progress log data.
 */
class LogApi
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
     * Progress log local date.

If `null` use the current date.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * List of fields.

Keys are field IDs ([ProgressFieldSid](#/components/schemas/Wl.Member.Progress.Field.ProgressFieldSid) constants).
Values are new field values.
Structure of value completely defined by individual fields.
     *
     * @var int[]|null
     */
    public ?array $a_field_log = null;

    /**
     * Whether field is only weight should be updated.
     *
     * @var bool|null
     */
    public ?bool $is_weight_only = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns progress log data.
     *
     * Loads field values recorded for the specified user on the given date (defaulting to the business's current
     * local date), and also returns the last date the user entered progress data and whether the viewer is staff.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_field_list: No description.
     *   - string dt_last: Last local date when the user entered progress values. `null` if the user had not entered progress data before the `dt_date` date.
     *   - bool is_staff: How we want to see this page. As a staff or as a user.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Member/Progress/Log/Edit/Log.json', $this->params(), 'GET');
    }

    /**
     * Saves progress fields log.
     *
     * Validates and persists the field values for the specified user and date, enforcing access
     * rules (clients cannot edit verified entries), and logs the change when data is modified.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_field_list: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Member/Progress/Log/Edit/Log.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'a_field_log' => $this->a_field_log,
            'is_weight_only' => $this->is_weight_only,
            ],
            static fn($v) => $v !== null
        );
    }
}
