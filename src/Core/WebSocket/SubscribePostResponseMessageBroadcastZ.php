<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastZ
{
    /**
     * List of users for which address verification failed.
     *
     * @var SubscribePostResponseMessageBroadcastZInvalid|null
     */
    public ?SubscribePostResponseMessageBroadcastZInvalid $a_invalid = null;

    /**
     * List of users for which address verification succeed.
     *
     * @var SubscribePostResponseMessageBroadcastZValid|null
     */
    public ?SubscribePostResponseMessageBroadcastZValid $a_valid = null;

    public function __construct(array $data)
    {
        $this->a_invalid = isset($data['a_invalid']) ? new SubscribePostResponseMessageBroadcastZInvalid((array)$data['a_invalid']) : null;
        $this->a_valid = isset($data['a_valid']) ? new SubscribePostResponseMessageBroadcastZValid((array)$data['a_valid']) : null;
    }
}
