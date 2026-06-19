<?php
namespace WlSdk\Social\Apple\Login;

use WlSdk\WlSdkClient;

/**
 * Signs user in with Apple.
 */
class AppleLoginPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Signs user in with Apple.
     *
     * Accepts the application ID, the Apple authorization code, and optional first and last name values.
     * If the user is already signed in, binds the Apple account to their existing account; otherwise,
     * signs them in or creates a new account using the Apple identity.
     *
     * @return AppleLoginPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AppleLoginPostRequest $request): AppleLoginPostResponse
    {
        return new AppleLoginPostResponse($this->client->request('/Social/Apple/Login/AppleLogin.json', $request->params(), 'POST'));
    }
}
