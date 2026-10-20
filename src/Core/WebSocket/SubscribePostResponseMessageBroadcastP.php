<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastP
{
    /**
     * New data of changes schedule item:
     *
     * @var SubscribePostResponseMessageBroadcastPVisit|null
     */
    public ?SubscribePostResponseMessageBroadcastPVisit $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? new SubscribePostResponseMessageBroadcastPVisit((array)$data['a_visit']) : null;
    }
}
