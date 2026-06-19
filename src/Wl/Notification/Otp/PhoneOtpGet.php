<?php
namespace WlSdk\Wl\Notification\Otp;

use WlSdk\WlSdkClient;

/**
 * Sends an OTP code to the specified phone number for verification.
 */
class PhoneOtpGet
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
}
