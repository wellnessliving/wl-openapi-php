<?php
namespace WlSdk\Wl\Notification\Otp;

use WlSdk\WlSdkClient;

/**
 * Sends an OTP code to the specified phone number for verification.
 */
class PhoneOtpApi
{
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
     * @return PhoneOtpApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PhoneOtpApiGetResponse
    {
        return new PhoneOtpApiGetResponse($this->client->request('/Wl/Notification/Otp/PhoneOtp.json', $this->params(), 'GET'));
    }

    /**
     * Verifies the OTP code submitted by the user for the specified phone number.
     *
     * Checks that the submitted `$s_otp_code` matches the code previously generated for `$text_phone` and has
     * not expired. Returns a validation error if the code is absent, incorrect, or expired.
     *
     * @return PhoneOtpApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): PhoneOtpApiPostResponse
    {
        return new PhoneOtpApiPostResponse($this->client->request('/Wl/Notification/Otp/PhoneOtp.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'text_phone' => $this->text_phone,
            's_otp_code' => $this->s_otp_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
