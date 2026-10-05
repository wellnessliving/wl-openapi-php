<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcast26
{
    /**
     * List of users for which address verification failed.
     *
     * @var SubscribePostResponseMessageBroadcast26Invalid|null
     */
    public ?SubscribePostResponseMessageBroadcast26Invalid $a_invalid = null;

    /**
     * List of users for which address verification succeed.
     *
     * @var SubscribePostResponseMessageBroadcast26Valid|null
     */
    public ?SubscribePostResponseMessageBroadcast26Valid $a_valid = null;

    public function __construct(array $data)
    {
        $this->a_invalid = isset($data['a_invalid']) ? new SubscribePostResponseMessageBroadcast26Invalid((array)$data['a_invalid']) : null;
        $this->a_valid = isset($data['a_valid']) ? new SubscribePostResponseMessageBroadcast26Valid((array)$data['a_valid']) : null;
    }
}
