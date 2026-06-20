<?php

namespace WlSdk\Wl\Notification\Otp;

use WlSdk\WlSdkClient;

/**
 * Sends an OTP code to the specified phone number for verification.
 */
class PhoneOtp
{
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
     * @return PhoneOtpGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PhoneOtpGetRequest $request): PhoneOtpGetResponse
    {
        return new PhoneOtpGetResponse($this->client->request('/Wl/Notification/Otp/PhoneOtp.json', $request->params(), 'GET'));
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
