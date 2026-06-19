<?php
namespace WlSdk\Wl\Member\Group\User;

use WlSdk\WlSdkClient;

/**
 * Gets information about all groups to which the specified user belongs.
 */
class UserGroupApi
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
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * UID of a user.
     *
     * @var string|null
     */
    public ?string $uid_user = null;

    /**
     * Member group key. Use special value 'quick' to add/remove the user to/from the quick group.
     *
     * @var string|null
     */
    public ?string $k_member_group = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about all groups to which the specified user belongs.
     *
     * Returns the list of member group keys for the given user within the specified business, populating
     * `$a_group_info` with those keys after access validation.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_group_info: All groups to which the specified user belongs.
     *   - bool is_quick_group: Whether the user is in the quick group or not.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Member/Group/User/UserGroup.json', $this->params(), 'GET');
    }

    /**
     * Adds a user to a group.
     *
     * Assigns the specified user to the given member group within the business after verifying access rights
     * and that the group key is valid.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Member/Group/User/UserGroup.json', $this->params(), 'POST');
    }

    /**
     * Deletes the user from the group.
     *
     * Removes the specified user from the given member group within the business after verifying access rights
     * and that the group key is valid.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Member/Group/User/UserGroup.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'uid_user' => $this->uid_user,
            'k_member_group' => $this->k_member_group,
            ],
            static fn($v) => $v !== null
        );
    }
}
