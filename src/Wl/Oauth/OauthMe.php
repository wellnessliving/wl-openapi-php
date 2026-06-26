<?php

namespace WlSdk\Wl\Oauth;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Oauth/OauthMe.json
 */
class OauthMe
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Oauth/OauthMe.json.
     *
     * @return OauthMeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(OauthMeGetRequest $request): OauthMeGetResponse
    {
        return new OauthMeGetResponse($this->client->request('/Wl/Oauth/OauthMe.json', $request->params(), 'GET'));
    }
}
