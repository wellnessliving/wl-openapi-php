<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastE
{
    /**
     * New information for messenger.
     *
     * @var SubscribePostResponseMessageBroadcastEData|null
     */
    public ?SubscribePostResponseMessageBroadcastEData $a_data = null;

    public function __construct(array $data)
    {
        $this->a_data = isset($data['a_data']) ? new SubscribePostResponseMessageBroadcastEData((array)$data['a_data']) : null;
    }
}
