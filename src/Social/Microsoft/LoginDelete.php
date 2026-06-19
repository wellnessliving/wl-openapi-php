<?php
namespace WlSdk\Social\Microsoft;

use WlSdk\WlSdkClient;

/**
 * Removes the association between a website client and a Microsoft account.
 */
class LoginDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Removes the association between a website client and a Microsoft account.
     *
     * Accepts the user's UID, verifies that the caller is the account owner, and unlinks the Microsoft
     * account from the user's profile.
     *
     * @return LoginDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(LoginDeleteRequest $request): LoginDeleteResponse
    {
        return new LoginDeleteResponse($this->client->request('/Social/Microsoft/Login.json', $request->params(), 'DELETE'));
    }
}
