<?php
namespace WlSdk\Core\Google\Captcha;

use WlSdk\WlSdkClient;

/**
 * Returns the overridden score for the reCAPTCHA v3.
 */
class CaptchaScoreApi
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
     * The user token CAPTCHA from [CaptchaVersionSid::V3](#/components/schemas/Core.Google.Captcha.CaptchaVersionSid) captcha.

Be careful when use this endpoint for validate token, because token can be used only once,
so if you validate token in this endpoint, you must generate new token for next requests.
     *
     * @var string|null
     */
    public ?string $text_token = null;

    /**
     * Overridden score value for V3 captcha.

`null` to reset override.
     *
     * @var float|null
     */
    public ?float $f_score = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the overridden score for the reCAPTCHA v3.
     *
     * Returns the current session-level score override value that was set via the PUT method.
     * Requires reCAPTCHA v3 to be enabled; throws an exception otherwise.
     *
     * @return array Parsed JSON response data.
     *   - float f_score: Overridden score value for V3 captcha.

`null` to reset override.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Core/Google/Captcha/CaptchaScore.json', $this->params(), 'GET');
    }

    /**
     * Validates the reCAPTCHA v3 token.
     *
     * Accepts a reCAPTCHA v3 user token, sends it to Google for verification, and returns a response ID
     * indicating the outcome. Note that each token can only be validated once; a new token must be generated
     * for subsequent requests.
     *
     * @return array Parsed JSON response data.
     *   - int id_response: Captcha response ID.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Core/Google/Captcha/CaptchaScore.json', $this->params(), 'POST');
    }

    /**
     * Overrides the score for the reCAPTCHA v3.
     *
     * Sets a custom score value in the range 0.0-1.0 to override the actual reCAPTCHA v3 score for the
     * current session. Pass `null` to clear the override and restore the default behavior. Requires the
     * score override feature to be enabled.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Core/Google/Captcha/CaptchaScore.json', $this->params(), 'PUT');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'text_token' => $this->text_token,
            'f_score' => $this->f_score,
            ],
            static fn($v) => $v !== null
        );
    }
}
