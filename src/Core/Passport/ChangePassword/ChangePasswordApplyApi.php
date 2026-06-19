<?php
namespace WlSdk\Core\Passport\ChangePassword;

use WlSdk\WlSdkClient;

/**
 * Saves for user new password.
 */
class ChangePasswordApplyApi
{
    /**
     * The verification code, which can be obtained from the "reset password" email link. This is a required value.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    /**
     * The user's login, which can be obtained from the "reset password" email link. This is a required value.
     *
     * @var string|null
     */
    public ?string $text_login = null;

    /**
     * The user's email address, which can be obtained from the "reset password" email link. This is a required
     * value.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The user's new password. This is a required value.
     *
     * @var string|null
     */
    public ?string $text_password = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves for user new password.
     *
     * Accepts the login, email, verification code (from the reset password link), and the new password,
     * validates each against the stored state, and updates the user's password. If the user is not already
     * signed in, a new session is started for them.
     *
     * @return ChangePasswordApplyApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ChangePasswordApplyApiPostResponse
    {
        return new ChangePasswordApplyApiPostResponse($this->client->request('/Core/Passport/ChangePassword/ChangePasswordApply.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'text_code' => $this->text_code,
            'text_login' => $this->text_login,
            'text_mail' => $this->text_mail,
            'text_password' => $this->text_password,
            ],
            static fn($v) => $v !== null
        );
    }
}
