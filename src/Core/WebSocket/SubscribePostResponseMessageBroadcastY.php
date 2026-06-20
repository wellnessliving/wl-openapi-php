<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastY
{
    /**
     * New data of changes schedule item:
     *
     * @var SubscribePostResponseMessageBroadcastYVisit|null
     */
    public ?SubscribePostResponseMessageBroadcastYVisit $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? new SubscribePostResponseMessageBroadcastYVisit((array)$data['a_visit']) : null;
    }
}
