<?php
namespace WlSdk\Wl\Profile\Edit\Email;

use WlSdk\WlSdkClient;

/**
 * Checks if specified email address is busy.
 */
class EditEmailApi
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
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * The business key where the check must be performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The email address to be checked.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The key of user whose email will be edited.
This will be `0` in the case of a new user creation.
     *
     * @var string|null
     */
    public ?string $uid_want = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if specified email address is busy.
     *
     * Looks up whether the given email is already registered and returns user info, membership
     *  status, staff flags, and password status if found; guest requests are subject to a per-IP
     *  rate limit.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - string[] a_business_member_key: List of business keys where a user is already a member.
     *   - array[] a_user: No description.
     *   - bool is_added: Shows, whether client was registered in the business: `true` if user was added to the business,
`false` if staff only received temporary access, because mandatory fields must be specified first.
     *   - bool is_current_member: If `true`, user is already a member of current business, `false` - otherwise.
     *   - bool is_limit: If `true`, then the number of requests has exceeded the rate limit. Otherwise, this will be `false`.
     *   - bool is_password_set: If `true`, user, who has the specified email, has password set, `false` - otherwise.
     *   - bool is_staff: If `true`, user, who has the specified email, is staff in current business, `false` - otherwise.
     *   - bool is_staff_any_business: If `true`, user, who has the specified email, is staff in any business, `false` - otherwise.
     *   - bool is_use: If `true`, then the specified email is in use. Otherwise, this will be `false`.
     *   - string uid_result: The key of user who has the specified email.
This will be `0` if the email is free or if the rate limit has been reached.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Profile/Edit/Email/EditEmail.json', $this->params(), 'GET');
    }

    /**
     * Adds user to business.
     *
     * Registers the found user as a member of the specified business. If required profile fields
     *  are missing, grants temporary access until the profile is completed. Sends a welcome
     *  notification once the user is fully registered.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - bool is_added: Shows, whether client was registered in the business: `true` if user was added to the business,
`false` if staff only received temporary access, because mandatory fields must be specified first.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Profile/Edit/Email/EditEmail.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'text_mail' => $this->text_mail,
            'uid_want' => $this->uid_want,
            ],
            static fn($v) => $v !== null
        );
    }
}
