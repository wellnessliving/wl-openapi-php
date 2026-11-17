<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcast27
{
    /**
     * List of users for which address verification failed.
     *
     * @var SubscribePostResponseMessageBroadcast27Invalid|null
     */
    public ?SubscribePostResponseMessageBroadcast27Invalid $a_invalid = null;

    /**
     * List of users for which address verification succeed.
     *
     * @var SubscribePostResponseMessageBroadcast27Valid|null
     */
    public ?SubscribePostResponseMessageBroadcast27Valid $a_valid = null;

    public function __construct(array $data)
    {
        $this->a_invalid = isset($data['a_invalid']) ? new SubscribePostResponseMessageBroadcast27Invalid((array)$data['a_invalid']) : null;
        $this->a_valid = isset($data['a_valid']) ? new SubscribePostResponseMessageBroadcast27Valid((array)$data['a_valid']) : null;
    }
}
