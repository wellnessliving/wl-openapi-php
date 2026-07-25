<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastJ
{
    /**
     * New data of changes schedule item:
     *
     * @var SubscribePostResponseMessageBroadcastJVisit|null
     */
    public ?SubscribePostResponseMessageBroadcastJVisit $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? new SubscribePostResponseMessageBroadcastJVisit((array)$data['a_visit']) : null;
    }
}
