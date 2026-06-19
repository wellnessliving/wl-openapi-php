<?php
namespace WlSdk\Social\Microsoft;

use WlSdk\WlSdkClient;

/**
 * Collects data for the Microsoft login button.
 */
class LoginGet
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
}
