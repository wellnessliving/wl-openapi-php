<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastM
{
    /**
     * New data of changes schedule item:
     *
     * @var SubscribePostResponseMessageBroadcastMVisit|null
     */
    public ?SubscribePostResponseMessageBroadcastMVisit $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? new SubscribePostResponseMessageBroadcastMVisit((array)$data['a_visit']) : null;
    }
}
