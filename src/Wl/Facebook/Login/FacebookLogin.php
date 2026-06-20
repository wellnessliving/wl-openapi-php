<?php

namespace WlSdk\Wl\Facebook\Login;

use WlSdk\WlSdkClient;

/**
 * Performs Facebook authorization within the context of the specified business.
 */
class FacebookLogin
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs Facebook authorization within the context of the specified business.
     *
     * Validates that the given business is active, sets it as the current frontend context, and then
     * delegates to the parent Facebook login flow to authenticate the user.
     *
     * @return FacebookLoginPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FacebookLoginPostRequest $request): FacebookLoginPostResponse
    {
        return new FacebookLoginPostResponse($this->client->request('/Wl/Facebook/Login/FacebookLogin.json', $request->params(), 'POST'));
    }
}
