<?php
namespace WlSdk\Wl\Member\Progress\Goal\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns progress goal log data.
 */
class GoalApi
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
    public ?array $a_field_goal = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns progress goal log data.
     *
     * Loads the current goal values for all configured progress fields for the specified user and business,
     * and also returns whether the current viewer is a staff member.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_field_list: No description.
     *   - bool is_staff: How we want to see this page. As a staff or as a user.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Member/Progress/Goal/Edit/Goal.json', $this->params(), 'GET');
    }

    /**
     * Saves progress goal fields log.
     *
     * Validates and persists the goal values provided in `$a_field_goal` for the specified user and business,
     * then returns the updated field list in `$a_field_list`.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_field_list: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Member/Progress/Goal/Edit/Goal.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'a_field_goal' => $this->a_field_goal,
            ],
            static fn($v) => $v !== null
        );
    }
}
