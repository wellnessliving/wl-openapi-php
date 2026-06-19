<?php
namespace WlSdk\Social\Microsoft;

use WlSdk\WlSdkClient;

/**
 * Collects data for the Microsoft login button.
 */
class LoginApi
{
    /**
     * The client for whom the Microsoft account will be unlinked.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The Redirect URI for external applications.
     * The link to the page on which Microsoft will return the result after authorization.
     * 
     * * All possible links must be registered in the Microsoft application used for authorization.
     * * WARNING: Do not use this link for a direct redirect. This will present a vulnerability.
     * 
     * * A `url_login` link will be generated along with this redirect URI.
     * * When checking the received `s_code` from Microsoft.
     * The link must be sent along with it to the `post()` method.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    /**
     * If authorization is performed in a third-party application, set this flag in case of authorization errors.
     *
     * @var bool|null
     */
    public ?bool $is_external = null;

    /**
     * The authorization code that the app requested.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    /**
     * If a state parameter is included in the request, the same value should appear in the response.
     * The app should verify that the state values in the request and response are identical.
     *
     * @var string|null
     */
    public ?string $s_state = null;

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
     * @return LoginApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): LoginApiGetResponse
    {
        return new LoginApiGetResponse($this->client->request('/Social/Microsoft/Login.json', $this->params(), 'GET'));
    }

    /**
     * Signs a user in with Microsoft.
     *
     * Accepts the Microsoft authorization code, an optional state parameter for CSRF verification, and
     * an optional redirect URI. Validates the state, exchanges the code for user identity, and signs the
     * user in or creates a new account.
     *
     * @return LoginApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): LoginApiPostResponse
    {
        return new LoginApiPostResponse($this->client->request('/Social/Microsoft/Login.json', $this->params(), 'POST'));
    }

    /**
     * Removes the association between a website client and a Microsoft account.
     *
     * Accepts the user's UID, verifies that the caller is the account owner, and unlinks the Microsoft
     * account from the user's profile.
     *
     * @return LoginApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): LoginApiDeleteResponse
    {
        return new LoginApiDeleteResponse($this->client->request('/Social/Microsoft/Login.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'uid' => $this->uid,
            'url_redirect' => $this->url_redirect,
            'is_external' => $this->is_external,
            's_code' => $this->s_code,
            's_state' => $this->s_state,
            ],
            static fn($v) => $v !== null
        );
    }
}
