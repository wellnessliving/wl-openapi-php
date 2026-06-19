<?php
namespace WlSdk\Core\Passport\Login\Register;

use WlSdk\WlSdkClient;

/**
 * Confirms email of a new user and completes registration.
 */
class RegisterConfirmApi
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
     * The unique registration code.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    /**
     * The user's login.
     *
     * @var string|null
     */
    public ?string $text_login = null;

    /**
     * The user's email.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Confirms email of a new user and completes registration.
     *
     * Accepts the email, login, and verification code obtained from the confirmation link sent by
     * [RegisterApi](/Core/Passport/Login/Register/Register.json),
     * validates them against the pending registration record, creates the user account, and returns the new user's
     * UID.
     *
     * @return array Parsed JSON response data.
     *   - string uid: The key of the new registered user.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Core/Passport/Login/Register/RegisterConfirm.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'text_code' => $this->text_code,
            'text_login' => $this->text_login,
            'text_mail' => $this->text_mail,
            ],
            static fn($v) => $v !== null
        );
    }
}
