<?php
namespace WlSdk\Social\Microsoft;

use WlSdk\WlSdkClient;

/**
 * Signs a user in with Microsoft.
 */
class LoginPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Signs a user in with Microsoft.
     *
     * Accepts the Microsoft authorization code, an optional state parameter for CSRF verification, and
     * an optional redirect URI. Validates the state, exchanges the code for user identity, and signs the
     * user in or creates a new account.
     *
     * @return LoginPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LoginPostRequest $request): LoginPostResponse
    {
        return new LoginPostResponse($this->client->request('/Social/Microsoft/Login.json', $request->params(), 'POST'));
    }
}
