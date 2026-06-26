<?php

namespace WlSdk\Wl\Zapier\Oauth;

use WlSdk\WlSdkClient;

/**
 * Generated new token base on refresh token.
 */
class OauthToken
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Generated new token base on refresh token.
     *
     * @return OauthTokenGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(OauthTokenGetRequest $request): OauthTokenGetResponse
    {
        return new OauthTokenGetResponse($this->client->request('/Wl/Zapier/Oauth/OauthToken.json', $request->params(), 'GET'));
    }

    /**
     * Generates new token or returns already generated and not expired token.
     *
     * @return OauthTokenPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(OauthTokenPostRequest $request): OauthTokenPostResponse
    {
        return new OauthTokenPostResponse($this->client->request('/Wl/Zapier/Oauth/OauthToken.json', $request->params(), 'POST'));
    }
}
