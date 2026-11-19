<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcast30
{
    /**
     * An array with information about SMS:
     *
     * @var SubscribePostResponseMessageBroadcast30Info|null
     */
    public ?SubscribePostResponseMessageBroadcast30Info $a_info = null;

    /**
     * The unique key of sent SMS from 2-way SMS chat. The key need to update SMS information in the chat after
     * sent SMS to client.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    public function __construct(array $data)
    {
        $this->a_info = isset($data['a_info']) ? new SubscribePostResponseMessageBroadcast30Info((array)$data['a_info']) : null;
        $this->s_key = isset($data['s_key']) ? (string)$data['s_key'] : null;
    }
}
