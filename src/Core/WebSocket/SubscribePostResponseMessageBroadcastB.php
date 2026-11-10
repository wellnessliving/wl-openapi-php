<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastB
{
    /**
     * New information for messenger.
     *
     * @var SubscribePostResponseMessageBroadcastBData|null
     */
    public ?SubscribePostResponseMessageBroadcastBData $a_data = null;

    public function __construct(array $data)
    {
        $this->a_data = isset($data['a_data']) ? new SubscribePostResponseMessageBroadcastBData((array)$data['a_data']) : null;
    }
}
