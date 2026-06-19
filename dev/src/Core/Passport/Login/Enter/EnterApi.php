<?php
namespace WlSdk\Core\Passport\Login\Enter;

use WlSdk\WlSdkClient;

/**
 * Signs the user in using their login and hashed password.
 */
class EnterApi
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
     * See `s_password` for details.
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
     *   <li>`&#039;&#039;` Empty line (default value) if you do not want to remember anything.</li>
     *   <li>`&#039;login&#039;` Remember only user login.</li>
     *   <li>`&#039;password&#039;` Remember user login and password.</li>
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Signs the user in using their login and hashed password.
     *
     * Accepts the user login, a password hash derived using the notepad obtained from
     * [NotepadApi](/Core/Passport/Login/Enter/Notepad.json),
     * and an optional remember preference. Validates credentials, enforces CAPTCHA when too many failed
     * attempts have occurred, starts a session for the user, and returns a redirect URL if applicable.
     *
     * @return EnterApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): EnterApiPostResponse
    {
        return new EnterApiPostResponse($this->client->request('/Core/Passport/Login/Enter/Enter.json', $this->params(), 'POST'));
    }

    private function params(): array
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
            static fn($v) => $v !== null
        );
    }
}
