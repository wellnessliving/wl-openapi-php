<?php
namespace WlSdk\Core\Passport\Enter\Jwt;

use WlSdk\WlSdkClient;

/**
 * Returns a jwt token that can be used to log user.
 */
class JwtTokenApi
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a jwt token that can be used to log user.
     *
     * Requires the user to be signed in. Generates a signed JWT token tied to the current authorization
     * header and user ID that can be passed to other services to authenticate the user without sharing session
     * cookies.
     *
     * @return JwtTokenApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): JwtTokenApiGetResponse
    {
        return new JwtTokenApiGetResponse($this->client->request('/Core/Passport/Enter/Jwt/JwtToken.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return [];
    }
}
