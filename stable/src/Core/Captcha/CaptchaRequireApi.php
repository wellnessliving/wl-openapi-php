<?php
namespace WlSdk\Core\Captcha;

use WlSdk\WlSdkClient;

/**
 * Checks if a CAPTCHA is required for the given captcha type.
 */
class CaptchaRequireApi
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
     * Arguments for creating CAPTCHA object.
     *
     * @var array[]|null
     */
    public ?array $a_arguments = null;

    /**
     * The CID of the CAPTCHA.
     *
     * @var int|null
     */
    public ?int $cid_captcha = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if a CAPTCHA is required for the given captcha type.
     *
     * Used before rendering a form that may include a CAPTCHA widget. The caller supplies the captcha type
     * (identified by CID) and any constructor arguments it needs; the response tells the frontend whether to
     * show the challenge at all and which reCAPTCHA version is active.
     *
     * @return array Parsed JSON response data.
     *   - bool is_enable_v3: `true` if enabled V3 captcha enabled.
`false` if only V2 captcha enable.
     *   - bool is_require: This will be `true` if a CAPTCHA is required. Otherwise, this will be `false`.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Core/Captcha/CaptchaRequire.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_arguments' => $this->a_arguments,
            'cid_captcha' => $this->cid_captcha,
            ],
            static fn($v) => $v !== null
        );
    }
}
