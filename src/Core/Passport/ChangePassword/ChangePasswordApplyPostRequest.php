<?php
namespace WlSdk\Core\Passport\ChangePassword;

class ChangePasswordApplyPostRequest
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

    public function params(): array
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
