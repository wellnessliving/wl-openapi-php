<?php
namespace WlSdk\Wl\Passport\Login\Enter;

use WlSdk\WlSdkClient;

/**
 * Verifies the submitted OTP code and establishes an authorized session for the user.
 */
class PassportOtpPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
