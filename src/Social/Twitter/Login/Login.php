<?php

namespace WlSdk\Social\Twitter\Login;

use WlSdk\WlSdkClient;

/**
 * Checks if user's profile is linked to Twitter.
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
     * Checks if user's profile is linked to Twitter.
     *
     * @return LoginGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LoginGetRequest $request): LoginGetResponse
    {
        return new LoginGetResponse($this->client->request('/Social/Twitter/Login/Login.json', $request->params(), 'GET'));
    }

    /**
     * Authorizes user with twitter.
     *
     * @return LoginPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LoginPostRequest $request): LoginPostResponse
    {
        return new LoginPostResponse($this->client->request('/Social/Twitter/Login/Login.json', $request->params(), 'POST'));
    }

    /**
     * Deletes link to Twitter profile.
     *
     * @return LoginDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(LoginDeleteRequest $request): LoginDeleteResponse
    {
        return new LoginDeleteResponse($this->client->request('/Social/Twitter/Login/Login.json', $request->params(), 'DELETE'));
    }
}
