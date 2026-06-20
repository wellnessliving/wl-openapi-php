<?php
namespace WlSdk\Social\Microsoft;

use WlSdk\WlSdkClient;

/**
 * Collects data for the Microsoft login button.
 */
class Login
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Collects data for the Microsoft login button.
     *
     * Called when rendering the "Sign in with Microsoft" button. Generates the OAuth 2.0 authorization URL
     * the button must link to. When a UID is provided, also reports whether that user already has a Microsoft
     * account linked, so the frontend can show "Link" or "Unlink" instead of the default sign-in label.
     *
     * @return LoginGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LoginGetRequest $request): LoginGetResponse
    {
        return new LoginGetResponse($this->client->request('/Social/Microsoft/Login.json', $request->params(), 'GET'));
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

    /**
     * Removes the association between a website client and a Microsoft account.
     *
     * Accepts the user's UID, verifies that the caller is the account owner, and unlinks the Microsoft
     * account from the user's profile.
     *
     * @return LoginDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(LoginDeleteRequest $request): LoginDeleteResponse
    {
        return new LoginDeleteResponse($this->client->request('/Social/Microsoft/Login.json', $request->params(), 'DELETE'));
    }
}
