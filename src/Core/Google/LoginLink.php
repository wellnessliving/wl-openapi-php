<?php

namespace WlSdk\Core\Google;

use WlSdk\WlSdkClient;

/**
 * Returns a link for a user to sign in with Google+.
 */
class LoginLink
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a link for a user to sign in with Google+.
     *
     * @return LoginLinkGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LoginLinkGetRequest $request): LoginLinkGetResponse
    {
        return new LoginLinkGetResponse($this->client->request('/Core/Google/LoginLink.json', $request->params(), 'GET'));
    }
}
