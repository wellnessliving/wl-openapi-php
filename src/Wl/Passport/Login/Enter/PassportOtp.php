<?php

namespace WlSdk\Wl\Passport\Login\Enter;

use WlSdk\WlSdkClient;

/**
 * Sends an OTP code to the user's email or phone number to initiate authorization.
 */
class PassportOtp
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
     * Checks the OTP rate limit, generates a new code for the given user, and dispatches it according to the
     * chosen delivery strategy. The user must not be already signed in and must not be an admin.
     *
     * There are two ways to specify the delivery channel:
     *
     * **1. Broadcast strategy** (default)
     *
     * Set {@link \WlSdk\Wl\Passport\Login\Enter\PassportOtp} to `null` or {@link
     * \WlSdk\Wl\Passport\Login\Enter\OtpDeliveryStrategyEnum} (or omit it entirely).
     * Use {@link \WlSdk\Wl\Passport\Login\Enter\PassportOtp} and/or {@link
     * \WlSdk\Wl\Passport\Login\Enter\PassportOtp} to specify which channels to use.
     * At least one of them must be `true`; the OTP is sent to every channel that is enabled.
     * The user must have a corresponding contact — a phone number when {@link
     * \WlSdk\Wl\Passport\Login\Enter\PassportOtp} is `true`, an email when
     * {@link \WlSdk\Wl\Passport\Login\Enter\PassportOtp} is `true` — otherwise an error is thrown.
     *
     * Example: set {@link \WlSdk\Wl\Passport\Login\Enter\PassportOtp} to `true` and {@link
     * \WlSdk\Wl\Passport\Login\Enter\PassportOtp} to `true` to send OTP via both email and SMS simultaneously.
     *
     * **2. Priority strategy**
     *
     * Set {@link \WlSdk\Wl\Passport\Login\Enter\PassportOtp} to {@link
     * \WlSdk\Wl\Passport\Login\Enter\OtpDeliveryStrategyEnum}.
     * Provide {@link \WlSdk\Wl\Passport\Login\Enter\PassportOtp} — a comma-separated list of `sms` and `email`
     * values in the preferred
     * order, e.g. `"sms,email"`.
     * The system picks the first channel from the list for which the user has valid contact data and sends the OTP
     * only to that one channel. The selected channel is returned in {@link
     * \WlSdk\Wl\Passport\Login\Enter\PassportOtpGetResponse::$text_delivery_selected}; when SMS is
     * selected, the last four digits of the phone are returned in {@link
     * \WlSdk\Wl\Passport\Login\Enter\PassportOtpGetResponse::$text_phone_masked}.
     * If none of the listed channels can be used, an error is thrown.
     *
     * Example: set {@link \WlSdk\Wl\Passport\Login\Enter\PassportOtp} set to `sms,email` to prefer SMS but fall
     * back to email if the user
     * has no phone number.
     *
     * @return PassportOtpGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PassportOtpGetRequest $request): PassportOtpGetResponse
    {
        return new PassportOtpGetResponse($this->client->request('/Wl/Passport/Login/Enter/PassportOtp.json', $request->params(), 'GET'));
    }

    /**
     * Verifies the submitted OTP code and establishes an authorized session for the user.
     *
     * Validates the OTP code for the given user, signs in the session, fires the post-login event,
     * completes business registration if applicable, and returns the redirect URL for the business frontend.
     *
     * @return PassportOtpPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PassportOtpPostRequest $request): PassportOtpPostResponse
    {
        return new PassportOtpPostResponse($this->client->request('/Wl/Passport/Login/Enter/PassportOtp.json', $request->params(), 'POST'));
    }
}
