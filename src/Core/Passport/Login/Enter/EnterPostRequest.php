<?php

namespace WlSdk\Core\Passport\Login\Enter;

class EnterPostRequest
{
    /**
     * Additional data for user authorization.
     *
     * @var string|null
     */
    public ?string $json_data = null;

    /**
     * The answer to the captcha, if needed.
     *
     * @var string|null
     */
    public ?string $s_captcha = null;

    /**
     * The user's login.
     *
     * @var string|null
     */
    public ?string $s_login = null;

    /**
     * A copy of the notepad that was used to hash the user password.
     *
     * See [EnterApi::$s_password](/Core/Passport/Login/Enter/Enter.json) for details.
     *
     * @var string|null
     */
    public ?string $s_notepad = null;

    /**
     * The hash of the user password.
     *
     * Use `Core_Passport_Login_Enter_NotepadModel.hash()` to evaluate the password hash.
     *
     * @var string|null
     */
    public ?string $s_password = null;

    /**
     * Determines whether the user login and password should be remembered, and how they should be remembered.
     *
     * The accepted values are:
     * <ul>
     *   <li>`''` Empty line (default value) if you do not want to remember anything.</li>
     *   <li>`'login'` Remember only user login.</li>
     *   <li>`'password'` Remember user login and password.</li>
     * </ul>
     *
     * @var string|null
     */
    public ?string $s_remember = null;

    /**
     * Url of previous page if the user was redirected to login.
     *
     * @var string|null
     */
    public ?string $url_return = null;

    public function params(): array
    {
        return array_filter(
            [
            'json_data' => $this->json_data,
            's_captcha' => $this->s_captcha,
            's_login' => $this->s_login,
            's_notepad' => $this->s_notepad,
            's_password' => $this->s_password,
            's_remember' => $this->s_remember,
            'url_return' => $this->url_return,
            ],
            static fn ($v) => $v !== null
        );
    }
}
