<?php
namespace WlSdk\Wl\Google\Login;

use WlSdk\WlSdkClient;

/**
 * Performs Google authorization within the context of the specified business.
 */
class GoogleLoginApi
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
     * Performs Google authorization within the context of the specified business.
     *
     * Validates that the given business is active, sets it as the current frontend context, and then
     * delegates to the parent Google login flow to authenticate the user.
     *
     * @return GoogleLoginApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): GoogleLoginApiPostResponse
    {
        return new GoogleLoginApiPostResponse($this->client->request('/Wl/Google/Login/GoogleLogin.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_application' => $this->s_application,
            's_code' => $this->s_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
