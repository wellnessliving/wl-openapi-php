<?php
namespace WlSdk\Social\Google\Plus;

use WlSdk\WlSdkClient;

/**
 * Authorizes user with Google.
 */
class LoginApi
{
    /**
     * The application id.
     * 
     * When application not passed, credential loaded from the application, which makes the request,
     * used [GoogleCredential](#/components/schemas/Core.Request.Api.Application.Credential.CredentialAbstract) for
     * load the credential.
     * For set credential need used [CredentialApi](/Core/Request/Api/Application/Credential/Credential.json) and
     * set [CredentialApi](/Core/Request/Api/Application/Credential/Credential.json) to
     * [GoogleCredential::CID](#/components/schemas/Core.Request.Api.Application.Credential.CredentialAbstract).
     * 
     * When application passed, the credential loaded by application id.
     *
     * @var string|null
     */
    public ?string $s_application = null;

    /**
     * The Google server authorization code.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Authorizes user with Google.
     *
     * Accepts a Google server authorization code and an optional application ID, loads the configured Google
     * credential for the application, and completes the OAuth 2.0 flow to sign the user in or create a new
     * account.
     *
     * @return LoginApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): LoginApiPostResponse
    {
        return new LoginApiPostResponse($this->client->request('/Social/Google/Plus/Login.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            's_application' => $this->s_application,
            's_code' => $this->s_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
