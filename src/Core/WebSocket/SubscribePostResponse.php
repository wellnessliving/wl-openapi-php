<?php
namespace WlSdk\Core\WebSocket;

/**
 * Response from POST
 */
class SubscribePostResponse
{
    /**
     * No description.
     *
     * @var SubscribePostResponseMessageBroadcastA[]|SubscribePostResponseMessageBroadcastB[]|SubscribePostResponseMessageBroadcastC[]|SubscribePostResponseMessageBroadcastD[]|SubscribePostResponseMessageBroadcastE[]|SubscribePostResponseMessageBroadcastF[]|SubscribePostResponseMessageBroadcastG[]|SubscribePostResponseMessageBroadcastH[]|SubscribePostResponseMessageBroadcastI[]|SubscribePostResponseMessageBroadcastJ[]|SubscribePostResponseMessageBroadcastK[]|SubscribePostResponseMessageBroadcastL[]|SubscribePostResponseMessageBroadcastM[]|array[]|SubscribePostResponseMessageBroadcastN[]|SubscribePostResponseMessageBroadcastO[]|SubscribePostResponseMessageBroadcastP[]|SubscribePostResponseMessageBroadcastQ[]|SubscribePostResponseMessageBroadcastR[]|SubscribePostResponseMessageBroadcastS[]|SubscribePostResponseMessageBroadcastT[]|SubscribePostResponseMessageBroadcastU[]|SubscribePostResponseMessageBroadcastV[]|SubscribePostResponseMessageBroadcastW[]|SubscribePostResponseMessageBroadcastX[]|SubscribePostResponseMessageBroadcastY[]|SubscribePostResponseMessageBroadcastZ[]|SubscribePostResponseMessageBroadcast26[]|SubscribePostResponseMessageBroadcast27[]|SubscribePostResponseMessageBroadcast28[]|SubscribePostResponseMessageBroadcast29[]|null
     */
    public ?array $a_message_broadcast = null;

    public function __construct(array $data)
    {
        $this->a_message_broadcast = $data['a_message_broadcast'] ?? null;
    }
}
