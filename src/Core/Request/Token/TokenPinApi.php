<?php
namespace WlSdk\Core\Request\Token;

use WlSdk\WlSdkClient;

/**
 * Gets new pin code.
 */
class TokenPinApi
{
    /**
     * The ID to use to send a security code via a push notification.
     *
     * @var string|null
     */
    public ?string $text_push = null;

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
     * @return TokenPinApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): TokenPinApiGetResponse
    {
        return new TokenPinApiGetResponse($this->client->request('/Core/Request/Token/TokenPin.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'text_push' => $this->text_push,
            ],
            static fn($v) => $v !== null
        );
    }
}
