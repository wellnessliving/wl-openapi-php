<?php
namespace WlSdk\Wl\Notification\Otp;

use WlSdk\WlSdkClient;

/**
 * Sends an OTP code to the specified phone number for verification.
 */
class PhoneOtpApi
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
     * Phone number to be validated.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * Otp code integer that user entered on the form. Will be compared with otp code, which was sent previously.
     *
     * @var string|null
     */
    public ?string $s_otp_code = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends an OTP code to the specified phone number for verification.
     *
     * Checks that the rate limit for OTP generation has not been exceeded, generates a new code, and dispatches
     * it to the given phone number via SMS. Requires a special privilege to use this endpoint.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Notification/Otp/PhoneOtp.json', $this->params(), 'GET');
    }

    /**
     * Verifies the OTP code submitted by the user for the specified phone number.
     *
     * Checks that the submitted `$s_otp_code` matches the code previously generated for `$text_phone` and has
     * not expired. Returns a validation error if the code is absent, incorrect, or expired.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Notification/Otp/PhoneOtp.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'text_phone' => $this->text_phone,
            's_otp_code' => $this->s_otp_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
