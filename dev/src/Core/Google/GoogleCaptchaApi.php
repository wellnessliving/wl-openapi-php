<?php
namespace WlSdk\Core\Google;

use WlSdk\WlSdkClient;

/**
 * Saves the user CAPTCHA token for the current session.
 */
class GoogleCaptchaApi
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
     * Captcha version ID.
     *
     * @var int|null
     */
    public ?int $id_version = null;

    /**
     * The action name.

Used to determine the place where the CAPTCHA is needed in documentation for endpoints that used
the CAPTCHA.
     *
     * @var string|null
     */
    public ?string $text_action = null;

    /**
     * The user token CAPTCHA.
     *
     * @var string|null
     */
    public ?string $text_token = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the user CAPTCHA token for the current session.
     *
     * Accepts the CAPTCHA version, the action name, and the user token obtained from the Google reCAPTCHA widget,
     * and stores them in the session so that subsequent API requests requiring CAPTCHA verification can use them.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Core/Google/GoogleCaptcha.json', $this->params(), 'PUT');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'id_version' => $this->id_version,
            'text_action' => $this->text_action,
            'text_token' => $this->text_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
