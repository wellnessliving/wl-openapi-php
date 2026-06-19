<?php
namespace WlSdk\Social\Facebook\Login;

use WlSdk\WlSdkClient;

/**
 * Authorizes user with facebook.
 */
class LoginApi
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Authorizes user with facebook.
     *
     * Accepts a Facebook access token and an optional application ID. If the user is already signed in,
     * links the Facebook account to their existing account; otherwise, signs them in or creates a new account
     * using the Facebook identity and the configured Facebook credentials.
     *
     * @return LoginApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): LoginApiPostResponse
    {
        return new LoginApiPostResponse($this->client->request('/Social/Facebook/Login/Login.json', $this->params(), 'POST'));
    }

    private function params(): array
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
