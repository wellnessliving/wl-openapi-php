<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcast26
{
    /**
     * New data of changes schedule item:
     *
     * @var SubscribePostResponseMessageBroadcast26Visit|null
     */
    public ?SubscribePostResponseMessageBroadcast26Visit $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? new SubscribePostResponseMessageBroadcast26Visit((array)$data['a_visit']) : null;
    }
}
