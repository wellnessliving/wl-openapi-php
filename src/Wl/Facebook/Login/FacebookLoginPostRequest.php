<?php
namespace WlSdk\Wl\Facebook\Login;

class FacebookLoginPostRequest
{
    /**
     * Business in which authorization is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The application id.
     * 
     * When application not passed, credential loaded from the application, which makes the request,
     * used {@link \WlSdk\Core\Request\Api\Application\Credential\CredentialAbstract} for load the credential.
     * For set credential need used [CredentialApi](/Core/Request/Api/Application/Credential/Credential.json) and
     * set [CredentialApi](/Core/Request/Api/Application/Credential/Credential.json) to {@link
     * \WlSdk\Core\Request\Api\Application\Credential\CredentialAbstract}.
     * 
     * When application passed, the credential loaded by application id.
     *
     * @var string|null
     */
    public ?string $s_application = null;

    /**
     * The Facebook token.
     *
     * @var string|null
     */
    public ?string $s_token = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_application' => $this->s_application,
            's_token' => $this->s_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
