<?php

namespace WlSdk\Core\Passport\Login;

use WlSdk\WlSdkClient;

/**
 * Signs in the user who corresponds to authorisation code.
 */
class PassportLoginTjx
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Signs in the user who corresponds to authorisation code.
     *
     * @return PassportLoginTjxPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PassportLoginTjxPostRequest $request): PassportLoginTjxPostResponse
    {
        return new PassportLoginTjxPostResponse($this->client->request('/Core/Passport/Login/PassportLoginTjx.json', $request->params(), 'POST'));
    }
}
