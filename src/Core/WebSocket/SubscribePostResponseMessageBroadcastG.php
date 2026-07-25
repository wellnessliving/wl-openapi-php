<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastG
{
    /**
     * New information for messenger.
     *
     * @var SubscribePostResponseMessageBroadcastGData|null
     */
    public ?SubscribePostResponseMessageBroadcastGData $a_data = null;

    public function __construct(array $data)
    {
        $this->a_data = isset($data['a_data']) ? new SubscribePostResponseMessageBroadcastGData((array)$data['a_data']) : null;
    }
}
