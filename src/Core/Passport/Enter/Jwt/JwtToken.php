<?php
namespace WlSdk\Core\Passport\Enter\Jwt;

use WlSdk\WlSdkClient;

/**
 * Returns a jwt token that can be used to log user.
 */
class JwtToken
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
     * @return JwtTokenGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(JwtTokenGetRequest $request): JwtTokenGetResponse
    {
        return new JwtTokenGetResponse($this->client->request('/Core/Passport/Enter/Jwt/JwtToken.json', $request->params(), 'GET'));
    }
}
