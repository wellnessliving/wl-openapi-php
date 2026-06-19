<?php
namespace WlSdk\Wl\Facebook\Login;

use WlSdk\WlSdkClient;

/**
 * Performs Facebook authorization within the context of the specified business.
 */
class FacebookLoginApi
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
     * Performs Facebook authorization within the context of the specified business.
     *
     * Validates that the given business is active, sets it as the current frontend context, and then
     * delegates to the parent Facebook login flow to authenticate the user.
     *
     * @return FacebookLoginApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): FacebookLoginApiPostResponse
    {
        return new FacebookLoginApiPostResponse($this->client->request('/Wl/Facebook/Login/FacebookLogin.json', $this->params(), 'POST'));
    }

    private function params(): array
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
