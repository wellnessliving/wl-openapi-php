<?php
namespace WlSdk\Core\Passport\Login\Register;

use WlSdk\WlSdkClient;

/**
 * Confirms email of a new user and completes registration.
 */
class RegisterConfirmApi
{
    /**
     * The unique registration code.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    /**
     * The user's login.
     *
     * @var string|null
     */
    public ?string $text_login = null;

    /**
     * The user's email.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Confirms email of a new user and completes registration.
     *
     * Accepts the email, login, and verification code obtained from the confirmation link sent by
     * [RegisterApi](/Core/Passport/Login/Register/Register.json),
     * validates them against the pending registration record, creates the user account, and returns the new user's
     * UID.
     *
     * @return RegisterConfirmApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): RegisterConfirmApiPostResponse
    {
        return new RegisterConfirmApiPostResponse($this->client->request('/Core/Passport/Login/Register/RegisterConfirm.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'text_code' => $this->text_code,
            'text_login' => $this->text_login,
            'text_mail' => $this->text_mail,
            ],
            static fn($v) => $v !== null
        );
    }
}
