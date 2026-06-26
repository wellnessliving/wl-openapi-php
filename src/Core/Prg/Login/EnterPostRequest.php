<?php

namespace WlSdk\Core\Prg\Login;

class EnterPostRequest
{
    /**
     * Programmer login.
     *
     * @var string|null
     */
    public ?string $s_login = null;

    /**
     * Notepad that is used to hash user password.
     *
     * See [EnterApi](/Core/Passport/Login/Enter/Enter.json) about hashing of user password.
     *
     * @var string|null
     */
    public ?string $s_notepad = null;

    /**
     * User password (evaluated with `Core_Passport_Login_Enter_NotepadModel.hash()` function on javascript).
     *
     * @var string|null
     */
    public ?string $s_password = null;

    public function params(): array
    {
        return array_filter(
            [
            's_login' => $this->s_login,
            's_notepad' => $this->s_notepad,
            's_password' => $this->s_password,
            ],
            static fn ($v) => $v !== null
        );
    }
}
