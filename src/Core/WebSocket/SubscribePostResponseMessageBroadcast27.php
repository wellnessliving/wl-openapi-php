<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcast27
{
    /**
     * New data of changes schedule item:
     *
     * @var SubscribePostResponseMessageBroadcast27Visit|null
     */
    public ?SubscribePostResponseMessageBroadcast27Visit $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? new SubscribePostResponseMessageBroadcast27Visit((array)$data['a_visit']) : null;
    }
}
