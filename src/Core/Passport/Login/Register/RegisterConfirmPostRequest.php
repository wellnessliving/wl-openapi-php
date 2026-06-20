<?php

namespace WlSdk\Core\Passport\Login\Register;

class RegisterConfirmPostRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'text_code' => $this->text_code,
            'text_login' => $this->text_login,
            'text_mail' => $this->text_mail,
            ],
            static fn ($v) => $v !== null
        );
    }
}
