<?php

namespace WlSdk\Social\Facebook\Login;

use WlSdk\WlSdkClient;

/**
 * Authorizes user with facebook.
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
     * Authorizes user with facebook.
     *
     * Accepts a Facebook access token and an optional application ID. If the user is already signed in,
     * links the Facebook account to their existing account; otherwise, signs them in or creates a new account
     * using the Facebook identity and the configured Facebook credentials.
     *
     * @return LoginPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LoginPostRequest $request): LoginPostResponse
    {
        return new LoginPostResponse($this->client->request('/Social/Facebook/Login/Login.json', $request->params(), 'POST'));
    }
}
