<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastZ
{
    /**
     * `true` if a new assess request has been sent (question window must be not closed);
     * `false` otherwise (question window must be closed).
     *
     * @var bool|null
     */
    public ?bool $is_inactive = null;

    public function __construct(array $data)
    {
        $this->is_inactive = isset($data['is_inactive']) ? (bool)$data['is_inactive'] : null;
    }
}
