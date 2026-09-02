<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastN
{
    /**
     * New data of changes schedule item:
     *
     * @var SubscribePostResponseMessageBroadcastNVisit|null
     */
    public ?SubscribePostResponseMessageBroadcastNVisit $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? new SubscribePostResponseMessageBroadcastNVisit((array)$data['a_visit']) : null;
    }
}
