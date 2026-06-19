<?php
namespace WlSdk\Core\Passport\ChangePassword;

use WlSdk\WlSdkClient;

/**
 * Saves for user new password.
 */
class ChangePasswordApplyApi
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
     * The verification code, which can be obtained from the "reset password" email link. This is a required value.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    /**
     * The user's login, which can be obtained from the "reset password" email link. This is a required value.
     *
     * @var string|null
     */
    public ?string $text_login = null;

    /**
     * The user's email address, which can be obtained from the "reset password" email link. This is a required value.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The user's new password. This is a required value.
     *
     * @var string|null
     */
    public ?string $text_password = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves for user new password.
     *
     * Accepts the login, email, verification code (from the reset password link), and the new password,
     * validates each against the stored state, and updates the user's password. If the user is not already
     * signed in, a new session is started for them.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Core/Passport/ChangePassword/ChangePasswordApply.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'text_code' => $this->text_code,
            'text_login' => $this->text_login,
            'text_mail' => $this->text_mail,
            'text_password' => $this->text_password,
            ],
            static fn($v) => $v !== null
        );
    }
}
