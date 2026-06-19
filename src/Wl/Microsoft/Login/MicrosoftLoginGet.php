<?php
namespace WlSdk\Wl\Microsoft\Login;

use WlSdk\WlSdkClient;

/**
 * Collects data for the Microsoft login button.
 */
class MicrosoftLoginGet
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
     * @return MicrosoftLoginGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MicrosoftLoginGetRequest $request): MicrosoftLoginGetResponse
    {
        return new MicrosoftLoginGetResponse($this->client->request('/Wl/Microsoft/Login/MicrosoftLogin.json', $request->params(), 'GET'));
    }
}
