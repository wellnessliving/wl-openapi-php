<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastV
{
    /**
     * New data of changes schedule item:
     *
     * @var SubscribePostResponseMessageBroadcastVVisit|null
     */
    public ?SubscribePostResponseMessageBroadcastVVisit $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? new SubscribePostResponseMessageBroadcastVVisit((array)$data['a_visit']) : null;
    }
}
