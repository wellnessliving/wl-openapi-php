<?php

namespace WlSdk\Core\Passport\ChangePassword;

class ChangePasswordBeginPostRequest
{
    /**
     * The characters to pass captcha test.
     *
     * Specify this only if server requires captcha.
     *
     * @var string|null
     */
    public ?string $text_captcha = null;

    /**
     * The user's email. This is a required value.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The URL for the password reset page. This link will be used in a password reset email.
     *
     * Specify this only if you want to send the user to a custom password reset page.
     * If empty, the default URL page will be used.
     *
     * @var string|null
     */
    public ?string $url_reset = null;

    public function params(): array
    {
        return array_filter(
            [
            'text_captcha' => $this->text_captcha,
            'text_mail' => $this->text_mail,
            'url_reset' => $this->url_reset,
            ],
            static fn ($v) => $v !== null
        );
    }
}
