<?php
namespace WlSdk\Core\WebSocket;

use WlSdk\WlSdkClient;

/**
 * Checks whether a listener can subscribe to specified channel.
 * Subscribes in a case of positive result.
 */
class Subscribe
{
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
     * @return SubscribePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SubscribePostRequest $request): SubscribePostResponse
    {
        return new SubscribePostResponse($this->client->request('/Core/WebSocket/Subscribe.json', $request->params(), 'POST'));
    }
}
