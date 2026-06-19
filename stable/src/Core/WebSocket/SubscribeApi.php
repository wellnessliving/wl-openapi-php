<?php
namespace WlSdk\Core\WebSocket;

use WlSdk\WlSdkClient;

/**
 * Checks whether a listener can subscribe to specified channel.
 * Subscribes in a case of positive result.
 */
class SubscribeApi
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_key = null;

    /**
     * Channel controller CID.
     *
     * @var int|null
     */
    public ?int $cid_channel = null;

    /**
     * Subscriber password.
     *
     * @var string|null
     */
    public ?string $s_password = null;

    /**
     * Request token.
     * 
     * This token is only used for asynchronous functions, and identifies a specific request.
     *
     * @var string|null
     */
    public ?string $s_token = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks whether a listener can subscribe to specified channel.
Subscribes in a case of positive result.
     *
     * Called by the WebSocket client immediately after a connection is established, to register interest in
     * a specific channel (identified by CID and key fields). If the current user is not permitted to receive
     * events on that channel, the subscription is rejected. On success, any messages already queued for the
     * channel are returned so the client does not miss events that arrived before the subscription was set up.
     *
     * @return SubscribeApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): SubscribeApiPostResponse
    {
        return new SubscribeApiPostResponse($this->client->request('/Core/WebSocket/Subscribe.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_key' => $this->a_key,
            'cid_channel' => $this->cid_channel,
            's_password' => $this->s_password,
            's_token' => $this->s_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
