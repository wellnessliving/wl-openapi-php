<?php
namespace WlSdk\Wl\Staff\Privilege;

use WlSdk\WlSdkClient;

/**
 * Returns the list of privileges for the current user in the given business.
 */
class PrivilegeListApi
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
     * Key of business to get privileges for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key to get privileges for.
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
     * Returns the list of privileges for the current user in the given business.
     *
     * Returns the complete access profile of the signed-in user for the given business: staff
     * privileges by ID, named admin privileges, and a flag indicating super-admin status. Can
     * only be called for the currently authenticated user, not on behalf of another user.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_privilege_passport: List of privileges, if user is administrator.

There is no certain list of admin privileges, as they are name-based.
If you need to check access to certain place contact WellnessLiving integration team.
     *   - int[] a_privilege_staff: List of privileges, if the given user is a staff member in the give business.
     *   - bool is_admin: Whether this user is a super-administrator because he is a studio staff member.

`true`, if this user is a super administrator because he is a studio staff member.
Super administrators have all privileges.

`false` if this is an ordinary user.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Staff/Privilege/PrivilegeList.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
