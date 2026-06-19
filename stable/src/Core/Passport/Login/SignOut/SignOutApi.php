<?php
namespace WlSdk\Core\Passport\Login\SignOut;

use WlSdk\WlSdkClient;

/**
 * Signs user out.
 */
class SignOutApi
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Signs user out.
     *
     * Requires the user to be signed in, fires a before-logout event allowing listeners to intercept or
     * handle the logout, then clears the current session. Throws an error if the user is authenticated
     * via SAML SSO, as API-based logout is not supported in that case.
     *
     * @return SignOutApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): SignOutApiPostResponse
    {
        return new SignOutApiPostResponse($this->client->request('/Core/Passport/Login/SignOut/SignOut.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return [];
    }
}
