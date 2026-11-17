<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastQ
{
    /**
     * New data of changes schedule item:
     *
     * @var SubscribePostResponseMessageBroadcastQVisit|null
     */
    public ?SubscribePostResponseMessageBroadcastQVisit $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? new SubscribePostResponseMessageBroadcastQVisit((array)$data['a_visit']) : null;
    }
}
