<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastD
{
    /**
     * New information for messenger.
     *
     * @var SubscribePostResponseMessageBroadcastDData|null
     */
    public ?SubscribePostResponseMessageBroadcastDData $a_data = null;

    public function __construct(array $data)
    {
        $this->a_data = isset($data['a_data']) ? new SubscribePostResponseMessageBroadcastDData((array)$data['a_data']) : null;
    }
}
