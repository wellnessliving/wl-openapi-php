<?php
namespace WlSdk\Social\Google\Plus;

use WlSdk\WlSdkClient;

/**
 * Authorizes user with Google.
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
     * Authorizes user with Google.
     *
     * Accepts a Google server authorization code and an optional application ID, loads the configured Google
     * credential for the application, and completes the OAuth 2.0 flow to sign the user in or create a new
     * account.
     *
     * @return LoginPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LoginPostRequest $request): LoginPostResponse
    {
        return new LoginPostResponse($this->client->request('/Social/Google/Plus/Login.json', $request->params(), 'POST'));
    }
}
