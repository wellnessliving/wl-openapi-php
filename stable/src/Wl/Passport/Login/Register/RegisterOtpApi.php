<?php
namespace WlSdk\Wl\Passport\Login\Register;

use WlSdk\WlSdkClient;

/**
 * Sends an OTP code to the user's email or phone number to initiate authorization.
 */
class RegisterOtpApi
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
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Email address OTP code will be sent to.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Phone number OTP code will be sent to.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * Otp code integer that was random generated.
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
     * Sends an OTP code to the user's email or phone number to initiate authorization.
     *
     * Checks the OTP rate limit, generates a new code for the given user, and dispatches it via email, SMS, or
     * both depending on `$is_mail` and `$is_phone`. The user must not be already signed in and must not be an
     * admin.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Passport/Login/Register/RegisterOtp.json', $this->params(), 'GET');
    }

    /**
     * Verifies the submitted OTP code and establishes an authorized session for the user.
     *
     * Validates the OTP code for the given user, signs in the session, fires the post-login event,
     * completes business registration if applicable, and returns the redirect URL for the business frontend.
     *
     * @return array Parsed JSON response data.
     *   - int i_attempt_left: Number of attempts left to submit the correct otp code.
     *   - string s_jwt_token: JWT token generated after successful otp validation.
     *   - string uid: Key of the user, which was signed in after successful otp verification.
     *   - string url_redirect: Redirect url after successful authorization.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Passport/Login/Register/RegisterOtp.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'text_mail' => $this->text_mail,
            'text_phone' => $this->text_phone,
            's_otp_code' => $this->s_otp_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
