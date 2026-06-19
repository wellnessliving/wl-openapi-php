<?php
namespace WlSdk\Wl\Location\Flag;

use WlSdk\WlSdkClient;

/**
 * Checks if user `uid` is flagged in location `k_location` or
 * each of users `a_uid` is flagged in location `k_location`.
 */
class FlagApi
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
     * User keys.
`null` if not set.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The user's key.
`null` if not set.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if user `uid` is flagged in location `k_location` or
each of users `a_uid` is flagged in location `k_location`.
     *
     * Accepts either a single user key (`uid`) or an array of user keys (`a_uid`) and returns the flag status
     * for each, including whether the flagged user is restricted from booking or purchasing at the location.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_flag: No description.
     *   - array[] a_restrictions_multiple: No description.
     *   - array[] a_restrictions_single: No description.
     *   - bool is_flag: `true` if the user is flagged and can make purchases, but cannot make new reservations, `false` if otherwise.

`null` until loaded or when `a_uid` was not set.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Location/Flag/Flag.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_uid' => $this->a_uid,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
