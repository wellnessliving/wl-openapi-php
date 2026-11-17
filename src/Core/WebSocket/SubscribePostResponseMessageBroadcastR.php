<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastR
{
    /**
     * New data of changes schedule item:
     *
     * @var SubscribePostResponseMessageBroadcastRVisit|null
     */
    public ?SubscribePostResponseMessageBroadcastRVisit $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? new SubscribePostResponseMessageBroadcastRVisit((array)$data['a_visit']) : null;
    }
}
