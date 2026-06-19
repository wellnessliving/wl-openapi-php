<?php
namespace WlSdk\Wl\Passport\Login\Enter;

use WlSdk\WlSdkClient;

/**
 * Sends an OTP code to the user's email or phone number to initiate authorization.
 */
class PassportOtpApi
{
    /**
     * Whether OTP code will be sending to user via email.
     * `true` if OTP code is sending through email,
     * `false` if OTP code is sending through phone number.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * Whether OTP code will be sending to user via email.
     *  `true` if OTP code is sending through phone number,
     *  `false` if OTP code is sending through email.
     *
     * @var bool|null
     */
    public ?bool $is_phone = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

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
     * @return PassportOtpApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PassportOtpApiGetResponse
    {
        return new PassportOtpApiGetResponse($this->client->request('/Wl/Passport/Login/Enter/PassportOtp.json', $this->params(), 'GET'));
    }

    /**
     * Verifies the submitted OTP code and establishes an authorized session for the user.
     *
     * Validates the OTP code for the given user, signs in the session, fires the post-login event,
     * completes business registration if applicable, and returns the redirect URL for the business frontend.
     *
     * @return PassportOtpApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): PassportOtpApiPostResponse
    {
        return new PassportOtpApiPostResponse($this->client->request('/Wl/Passport/Login/Enter/PassportOtp.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_mail' => $this->is_mail,
            'is_phone' => $this->is_phone,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            's_otp_code' => $this->s_otp_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
