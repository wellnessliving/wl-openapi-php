<?php
namespace WlSdk\Wl\Profile\Edit;

use WlSdk\WlSdkClient;

/**
 * Saves new password for user.
 */
class EditPasswordApi
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
     * Checks if the current password is required or not to update the password.
     *
     * @var bool|null
     */
    public ?bool $is_old_password_required = null;

    /**
     * The key ID of business where actions take place.
Business is necessary for mail sending only.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The confirmation of new password.
     *
     * @var string|null
     */
    public ?string $s_password_confirm = null;

    /**
     * The new password.
     *
     * @var string|null
     */
    public ?string $s_password_new = null;

    /**
     * The old password.
     *
     * @var string|null
     */
    public ?string $s_password_old = null;

    /**
     * The user key.
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
     * Saves new password for user.
     *
     * Changes the user's password after verifying the current one, enforcing complexity and
     *  length rules, and sends a password-change notification email. The old password check can
     *  be skipped by staff with the appropriate access level.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Profile/Edit/EditPassword.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_old_password_required' => $this->is_old_password_required,
            'k_business' => $this->k_business,
            's_password_confirm' => $this->s_password_confirm,
            's_password_new' => $this->s_password_new,
            's_password_old' => $this->s_password_old,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
