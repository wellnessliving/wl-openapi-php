<?php

namespace WlSdk\Thoth\LayoutBe\Login;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/LayoutBe/Login/LoginLogo.json
 */
class LoginLogo
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/LayoutBe/Login/LoginLogo.json.
     *
     * @return LoginLogoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LoginLogoGetRequest $request): LoginLogoGetResponse
    {
        return new LoginLogoGetResponse($this->client->request('/Thoth/LayoutBe/Login/LoginLogo.json', $request->params(), 'GET'));
    }
}
