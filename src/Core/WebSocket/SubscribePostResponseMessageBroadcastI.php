<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastI
{
    /**
     * New data of changes schedule item:
     *
     * @var SubscribePostResponseMessageBroadcastIVisit|null
     */
    public ?SubscribePostResponseMessageBroadcastIVisit $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? new SubscribePostResponseMessageBroadcastIVisit((array)$data['a_visit']) : null;
    }
}
