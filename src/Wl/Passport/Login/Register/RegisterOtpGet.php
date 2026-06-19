<?php
namespace WlSdk\Wl\Passport\Login\Register;

use WlSdk\WlSdkClient;

/**
 * Sends an OTP code to the user's email or phone number to initiate authorization.
 */
class RegisterOtpGet
{
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
     * @return RegisterOtpGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RegisterOtpGetRequest $request): RegisterOtpGetResponse
    {
        return new RegisterOtpGetResponse($this->client->request('/Wl/Passport/Login/Register/RegisterOtp.json', $request->params(), 'GET'));
    }
}
