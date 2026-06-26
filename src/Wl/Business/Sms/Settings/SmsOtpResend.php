<?php

namespace WlSdk\Wl\Business\Sms\Settings;

use WlSdk\WlSdkClient;

/**
 * Initiates resend of OTP verification message.
 */
class SmsOtpResend
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Initiates resend of OTP verification message.
     *
     * @return SmsOtpResendPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsOtpResendPostRequest $request): SmsOtpResendPostResponse
    {
        return new SmsOtpResendPostResponse($this->client->request('/Wl/Business/Sms/Settings/SmsOtpResend.json', $request->params(), 'POST'));
    }
}
