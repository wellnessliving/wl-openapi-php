<?php
namespace WlSdk\Social\Facebook\Login;

class LoginPostRequest
{
    /**
     * The application id.
     * 
     * When application not passed, credential loaded from the application, which makes the request,
     * used [FacebookCredential](#/components/schemas/Core.Request.Api.Application.Credential.CredentialAbstract)
     * for load the credential.
     * For set credential need used [CredentialApi](/Core/Request/Api/Application/Credential/Credential.json) and
     * set [CredentialApi](/Core/Request/Api/Application/Credential/Credential.json) to
     * [FacebookCredential::CID](#/components/schemas/Core.Request.Api.Application.Credential.CredentialAbstract).
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
            's_application' => $this->s_application,
            's_token' => $this->s_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
