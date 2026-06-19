<?php
namespace WlSdk\Core\Request\Token;

use WlSdk\WlSdkClient;

/**
 * Gets new pin code.
 */
class TokenPinGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets new pin code.
     *
     * First step of push-notification-based security token generation. Issues a short-lived PIN code
     * linked to a push recipient, which is then sent to the user's device. The client must present
     * this PIN before its expiry to receive the final security token.
     *
     * @return TokenPinGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TokenPinGetRequest $request): TokenPinGetResponse
    {
        return new TokenPinGetResponse($this->client->request('/Core/Request/Token/TokenPin.json', $request->params(), 'GET'));
    }
}
