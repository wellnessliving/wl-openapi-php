<?php

namespace WlSdk\Wl\Login\Location;

use WlSdk\WlSdkClient;

/**
 * Gets locations ever visited by user.
 */
class LoginLocation
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets locations ever visited by user.
     *
     * @return LoginLocationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LoginLocationGetRequest $request): LoginLocationGetResponse
    {
        return new LoginLocationGetResponse($this->client->request('/Wl/Login/Location/LoginLocation.json', $request->params(), 'GET'));
    }
}
