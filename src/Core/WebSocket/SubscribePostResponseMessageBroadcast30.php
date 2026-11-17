<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcast30
{
    /**
     * An array with information about dialog:
     *
     * @var SubscribePostResponseMessageBroadcast30Info|null
     */
    public ?SubscribePostResponseMessageBroadcast30Info $a_info = null;

    /**
     * The time in UNIX format when socket message was sent.
     *
     * @var int|null
     */
    public ?int $tl_send = null;

    public function __construct(array $data)
    {
        $this->a_info = isset($data['a_info']) ? new SubscribePostResponseMessageBroadcast30Info((array)$data['a_info']) : null;
        $this->tl_send = isset($data['tl_send']) ? (int)$data['tl_send'] : null;
    }
}
