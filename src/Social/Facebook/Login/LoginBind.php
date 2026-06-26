<?php

namespace WlSdk\Social\Facebook\Login;

use WlSdk\WlSdkClient;

/**
 * Checks if user's profile is bound to Facebook.
 */
class LoginBind
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if user's profile is bound to Facebook.
     *
     * @return LoginBindGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LoginBindGetRequest $request): LoginBindGetResponse
    {
        return new LoginBindGetResponse($this->client->request('/Social/Facebook/Login/LoginBind.json', $request->params(), 'GET'));
    }

    /**
     * Binds user's profile to Facebook.
     *
     * @return LoginBindPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LoginBindPostRequest $request): LoginBindPostResponse
    {
        return new LoginBindPostResponse($this->client->request('/Social/Facebook/Login/LoginBind.json', $request->params(), 'POST'));
    }

    /**
     * Deletes link to Facebook profile.
     *
     * @return LoginBindDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(LoginBindDeleteRequest $request): LoginBindDeleteResponse
    {
        return new LoginBindDeleteResponse($this->client->request('/Social/Facebook/Login/LoginBind.json', $request->params(), 'DELETE'));
    }
}
