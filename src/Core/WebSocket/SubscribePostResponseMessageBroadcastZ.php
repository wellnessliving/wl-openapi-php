<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastZ
{
    /**
     * New data of changes schedule item:
     *
     * @var SubscribePostResponseMessageBroadcastZVisit|null
     */
    public ?SubscribePostResponseMessageBroadcastZVisit $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? new SubscribePostResponseMessageBroadcastZVisit((array)$data['a_visit']) : null;
    }
}
