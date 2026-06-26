<?php

namespace WlSdk\Wl\Reception\Application;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Reception/Application/AuthorizeWithPassword.json
 */
class AuthorizeWithPassword
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Reception/Application/AuthorizeWithPassword.json.
     *
     * @return AuthorizeWithPasswordPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AuthorizeWithPasswordPostRequest $request): AuthorizeWithPasswordPostResponse
    {
        return new AuthorizeWithPasswordPostResponse($this->client->request('/Wl/Reception/Application/AuthorizeWithPassword.json', $request->params(), 'POST'));
    }
}
