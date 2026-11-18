<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastK
{
    /**
     * New data of changes schedule item:
     *
     * @var SubscribePostResponseMessageBroadcastKVisit|null
     */
    public ?SubscribePostResponseMessageBroadcastKVisit $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? new SubscribePostResponseMessageBroadcastKVisit((array)$data['a_visit']) : null;
    }
}
