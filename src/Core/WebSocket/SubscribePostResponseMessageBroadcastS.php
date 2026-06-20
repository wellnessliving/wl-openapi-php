<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastS
{
    /**
     * New data of changes schedule item:
     *
     * @var SubscribePostResponseMessageBroadcastSVisit|null
     */
    public ?SubscribePostResponseMessageBroadcastSVisit $a_visit = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? new SubscribePostResponseMessageBroadcastSVisit((array)$data['a_visit']) : null;
    }
}
