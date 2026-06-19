<?php
namespace WlSdk\Social\Apple\Login;

use WlSdk\WlSdkClient;

/**
 * Removes the association between a website client and the Apple account.
 * Invalidates the tokens and associated client authorizations.
 */
class AppleLoginDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Removes the association between a website client and the Apple account.
Invalidates the tokens and associated client authorizations.
     *
     * Requires the user to be signed in. Accepts the application ID, retrieves the Apple sign-in certificate
     * for that application, and unlinks the Apple account from the current user.
     *
     * @return AppleLoginDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AppleLoginDeleteRequest $request): AppleLoginDeleteResponse
    {
        return new AppleLoginDeleteResponse($this->client->request('/Social/Apple/Login/AppleLogin.json', $request->params(), 'DELETE'));
    }
}
