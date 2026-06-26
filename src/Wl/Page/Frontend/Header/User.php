<?php

namespace WlSdk\Wl\Page\Frontend\Header;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Page/Frontend/Header/User.json
 */
class User
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Page/Frontend/Header/User.json.
     *
     * @return UserGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(UserGetRequest $request): UserGetResponse
    {
        return new UserGetResponse($this->client->request('/Wl/Page/Frontend/Header/User.json', $request->params(), 'GET'));
    }
}
