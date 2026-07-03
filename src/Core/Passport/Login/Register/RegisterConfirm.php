<?php

namespace WlSdk\Core\Passport\Login\Register;

use WlSdk\WlSdkClient;

/**
 * Confirms email of a new user and completes registration.
 */
class RegisterConfirm
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Confirms email of a new user and completes registration.
     *
     * Accepts the email, login, and verification code obtained from the confirmation link sent by {@link
     * \WlSdk\Core\Passport\Login\Register\Register},
     * validates them against the pending registration record, creates the user account, and returns the new user's
     * UID.
     *
     * @return RegisterConfirmPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RegisterConfirmPostRequest $request): RegisterConfirmPostResponse
    {
        return new RegisterConfirmPostResponse($this->client->request('/Core/Passport/Login/Register/RegisterConfirm.json', $request->params(), 'POST'));
    }
}
