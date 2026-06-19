<?php
namespace WlSdk\Wl\Staff\StaffList;

use WlSdk\WlSdkClient;

/**
 * Returns the list of staff members for the given business.
 */
class StaffListApi
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
     * A list of privileges to filter staff members by.

This property acts as a filter.
Only staff members possessing all the privileges specified in this list will be included in the result.
Each element in the array represents a privilege ID, and should be one of [PrivilegeSid](#/components/schemas/Wl.Privilege.PrivilegeSid) constants.
     *
     * @var int[]|null
     */
    public ?array $a_privilege = null;

    /**
     * Determines that only staff members which the current user has access to should be retrieved.

 `true` if only staff members which the current user has access to should be retrieved.
 `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_check_staff_access = null;

    /**
     * Whether inactive and removed staff members are available.
If `true` inactive and removed staff members are available. `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_staff_inactive = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of staff members for the given business.
     *
     * Returns all active (or optionally inactive) staff members for the business, including
     * their name, role, assigned services, contact details, and location assignments. Can be
     * filtered to only staff who have a specific privilege, and whether access-level checks
     * should be applied when building the result.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_staff: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Staff/StaffList/StaffList.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_privilege' => $this->a_privilege,
            'is_check_staff_access' => $this->is_check_staff_access,
            'is_staff_inactive' => $this->is_staff_inactive,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
