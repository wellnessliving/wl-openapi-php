<?php
namespace WlSdk\Wl\Microsoft\Login;

use WlSdk\WlSdkClient;

/**
 * Removes the association between a website client and a Microsoft account.
 */
class MicrosoftLoginDelete
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
     * @return MicrosoftLoginDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(MicrosoftLoginDeleteRequest $request): MicrosoftLoginDeleteResponse
    {
        return new MicrosoftLoginDeleteResponse($this->client->request('/Wl/Microsoft/Login/MicrosoftLogin.json', $request->params(), 'DELETE'));
    }
}
