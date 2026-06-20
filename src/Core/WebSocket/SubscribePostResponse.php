<?php
namespace WlSdk\Core\WebSocket;

/**
 * Response from POST
 */
class SubscribePostResponse
{
    /**
     * All messages in queue. Key is a message key. Value is message data.
     * 
     * When a client is initially subscribed for a WebSocket channel, entire message queue is sent to the client.
     * This is needed to send message that were generated before a client has subscribed.
     *
     * @var SubscribePostResponseMessageBroadcastA[]|SubscribePostResponseMessageBroadcastB[]|SubscribePostResponseMessageBroadcastC[]|SubscribePostResponseMessageBroadcastD[]|SubscribePostResponseMessageBroadcastE[]|SubscribePostResponseMessageBroadcastF[]|SubscribePostResponseMessageBroadcastG[]|SubscribePostResponseMessageBroadcastH[]|SubscribePostResponseMessageBroadcastI[]|SubscribePostResponseMessageBroadcastJ[]|SubscribePostResponseMessageBroadcastK[]|SubscribePostResponseMessageBroadcastL[]|SubscribePostResponseMessageBroadcastM[]|array[]|SubscribePostResponseMessageBroadcastN[]|SubscribePostResponseMessageBroadcastO[]|SubscribePostResponseMessageBroadcastP[]|SubscribePostResponseMessageBroadcastQ[]|SubscribePostResponseMessageBroadcastR[]|SubscribePostResponseMessageBroadcastS[]|SubscribePostResponseMessageBroadcastT[]|SubscribePostResponseMessageBroadcastU[]|SubscribePostResponseMessageBroadcastV[]|SubscribePostResponseMessageBroadcastW[]|SubscribePostResponseMessageBroadcastX[]|SubscribePostResponseMessageBroadcastY[]|SubscribePostResponseMessageBroadcastZ[]|SubscribePostResponseMessageBroadcast26[]|SubscribePostResponseMessageBroadcast27[]|SubscribePostResponseMessageBroadcast28[]|SubscribePostResponseMessageBroadcast29[]|null
     */
    public ?array $a_message_broadcast = null;

    public function __construct(array $data)
    {
        $this->a_message_broadcast = $data['a_message_broadcast'] ?? null;
    }
}
