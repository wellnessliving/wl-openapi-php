<?php
namespace WlSdk\Core\Passport\ChangePassword;

use WlSdk\WlSdkClient;

/**
 * Sends to user "password recovery" mail.
 */
class ChangePasswordBeginApi
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
     * The characters to pass captcha test.

Specify this only if server requires captcha.
     *
     * @var string|null
     */
    public ?string $text_captcha = null;

    /**
     * The user's email. This is a required value.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The URL for the password reset page. This link will be used in a password reset email.

Specify this only if you want to send the user to a custom password reset page.
If empty, the default URL page will be used.
     *
     * @var string|null
     */
    public ?string $url_reset = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends to user "password recovery" mail.
     *
     * Accepts the user's email address and an optional custom reset-page URL, validates the input,
     * optionally checks a CAPTCHA, and sends a password reset email containing a link the user can follow
     * to set a new password using
     * [ChangePasswordApplyApi](/Core/Passport/ChangePassword/ChangePasswordApply.json).
     *
     * @return array Parsed JSON response data.
     *   - string text_error: The error code. This will be an empty string if the email has been sent successfully.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Core/Passport/ChangePassword/ChangePasswordBegin.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'text_captcha' => $this->text_captcha,
            'text_mail' => $this->text_mail,
            'url_reset' => $this->url_reset,
            ],
            static fn($v) => $v !== null
        );
    }
}
