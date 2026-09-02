<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastC
{
    /**
     * New information for messenger.
     *
     * @var SubscribePostResponseMessageBroadcastCData|null
     */
    public ?SubscribePostResponseMessageBroadcastCData $a_data = null;

    public function __construct(array $data)
    {
        $this->a_data = isset($data['a_data']) ? new SubscribePostResponseMessageBroadcastCData((array)$data['a_data']) : null;
    }
}
