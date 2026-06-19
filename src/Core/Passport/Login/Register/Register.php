<?php
namespace WlSdk\Core\Passport\Login\Register;

use WlSdk\WlSdkClient;

/**
 * Validates the new user's data and sends a confirmation email to complete registration.
 */
class Register
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Validates the new user's data and sends a confirmation email to complete registration.
     *
     * Accepts the new user's name, email, and password, validates each field, stores the pending registration,
     * and sends a confirmation email with a link to complete registration via
     * [RegisterConfirmApi](/Core/Passport/Login/Register/RegisterConfirm.json).
     * An optional application ID and custom confirmation URL may be provided.
     *
     * @return RegisterPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RegisterPostRequest $request): RegisterPostResponse
    {
        return new RegisterPostResponse($this->client->request('/Core/Passport/Login/Register/Register.json', $request->params(), 'POST'));
    }
}
