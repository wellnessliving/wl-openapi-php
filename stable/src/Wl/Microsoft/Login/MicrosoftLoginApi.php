<?php
namespace WlSdk\Wl\Microsoft\Login;

use WlSdk\WlSdkClient;

/**
 * Collects data for the Microsoft login button.
 */
class MicrosoftLoginApi
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
     * * A [LoginApi](/Social/Microsoft/Login.json) link will be generated along with this redirect URI.
     * * When checking the received [LoginApi](/Social/Microsoft/Login.json) from Microsoft.
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
     * Business in which authorization is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
     * @return MicrosoftLoginApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): MicrosoftLoginApiGetResponse
    {
        return new MicrosoftLoginApiGetResponse($this->client->request('/Wl/Microsoft/Login/MicrosoftLogin.json', $this->params(), 'GET'));
    }

    /**
     * Authenticates a user via Microsoft OAuth for the specified business.
     *
     * Validates the business key, sets it as the current frontend business context, and then delegates to the
     * parent Microsoft OAuth flow to complete sign-in.
     *
     * @return MicrosoftLoginApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): MicrosoftLoginApiPostResponse
    {
        return new MicrosoftLoginApiPostResponse($this->client->request('/Wl/Microsoft/Login/MicrosoftLogin.json', $this->params(), 'POST'));
    }

    /**
     * Removes the association between a website client and a Microsoft account.
     *
     * Accepts the user's UID, verifies that the caller is the account owner, and unlinks the Microsoft
     * account from the user's profile.
     *
     * @return MicrosoftLoginApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): MicrosoftLoginApiDeleteResponse
    {
        return new MicrosoftLoginApiDeleteResponse($this->client->request('/Wl/Microsoft/Login/MicrosoftLogin.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'uid' => $this->uid,
            'url_redirect' => $this->url_redirect,
            'is_external' => $this->is_external,
            'k_business' => $this->k_business,
            's_code' => $this->s_code,
            's_state' => $this->s_state,
            ],
            static fn($v) => $v !== null
        );
    }
}
