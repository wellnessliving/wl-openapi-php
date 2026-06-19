<?php
namespace WlSdk\Wl\Integration\DragonFly;

use WlSdk\WlSdkClient;

/**
 * Checks if the user can physically access the location.
 */
class AccessApi
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
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The member ID.
Member ID is intended to work with barcode scanners.
If this is specified the user key does not need to be set.
     *
     * @var string|null
     */
    public ?string $s_member = null;

    /**
     * The user key.
This should be specified if the member ID is not set or not known.
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
     * Checks if the user can physically access the location.
     *
     * There are 3 scenarios where a user can be given access.
     * Scenario 1 - If a valid member ID used, for instance from a bar code scanner, then the user may have access.
     * Scenario 2 - If a valid uid is used and the user is a staff member, then the user may have access.
     * Scenario 3 - If a valid uid is used and the client has a session or gym access at this location, then the
     * user may have access.
     *
     * @return array Parsed JSON response data.
     *   - bool can_access: Whether the specified user can access the location.
`true` if the specified member can access the location.
`false` if they can not.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Integration/DragonFly/Access.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_location' => $this->k_location,
            's_member' => $this->s_member,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
