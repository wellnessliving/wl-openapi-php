<?php
namespace WlSdk\Wl\Passport\Login\Register;

use WlSdk\WlSdkClient;

/**
 * Sends an OTP code to the user's email or phone number to initiate authorization.
 */
class RegisterOtpApi
{
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
     * @return RegisterOtpApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): RegisterOtpApiGetResponse
    {
        return new RegisterOtpApiGetResponse($this->client->request('/Wl/Passport/Login/Register/RegisterOtp.json', $this->params(), 'GET'));
    }

    /**
     * Verifies the submitted OTP code and establishes an authorized session for the user.
     *
     * Validates the OTP code for the given user, signs in the session, fires the post-login event,
     * completes business registration if applicable, and returns the redirect URL for the business frontend.
     *
     * @return RegisterOtpApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): RegisterOtpApiPostResponse
    {
        return new RegisterOtpApiPostResponse($this->client->request('/Wl/Passport/Login/Register/RegisterOtp.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_mail' => $this->text_mail,
            'text_phone' => $this->text_phone,
            's_otp_code' => $this->s_otp_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
