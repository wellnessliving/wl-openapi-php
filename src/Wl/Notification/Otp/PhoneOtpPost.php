<?php
namespace WlSdk\Wl\Notification\Otp;

use WlSdk\WlSdkClient;

/**
 * Verifies the OTP code submitted by the user for the specified phone number.
 */
class PhoneOtpPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Verifies the OTP code submitted by the user for the specified phone number.
     *
     * Checks that the submitted `$s_otp_code` matches the code previously generated for `$text_phone` and has
     * not expired. Returns a validation error if the code is absent, incorrect, or expired.
     *
     * @return PhoneOtpPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PhoneOtpPostRequest $request): PhoneOtpPostResponse
    {
        return new PhoneOtpPostResponse($this->client->request('/Wl/Notification/Otp/PhoneOtp.json', $request->params(), 'POST'));
    }
}
