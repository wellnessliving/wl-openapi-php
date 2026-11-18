<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcast28
{
    /**
     * List of users for which address verification failed.
     *
     * @var SubscribePostResponseMessageBroadcast28Invalid|null
     */
    public ?SubscribePostResponseMessageBroadcast28Invalid $a_invalid = null;

    /**
     * List of users for which address verification succeed.
     *
     * @var SubscribePostResponseMessageBroadcast28Valid|null
     */
    public ?SubscribePostResponseMessageBroadcast28Valid $a_valid = null;

    public function __construct(array $data)
    {
        $this->a_invalid = isset($data['a_invalid']) ? new SubscribePostResponseMessageBroadcast28Invalid((array)$data['a_invalid']) : null;
        $this->a_valid = isset($data['a_valid']) ? new SubscribePostResponseMessageBroadcast28Valid((array)$data['a_valid']) : null;
    }
}
