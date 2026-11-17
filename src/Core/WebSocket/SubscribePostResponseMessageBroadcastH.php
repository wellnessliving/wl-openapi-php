<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastH
{
    /**
     * Time when the device was registered for the pass, in UTC and MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_add = null;

    public function __construct(array $data)
    {
        $this->dtu_add = isset($data['dtu_add']) ? (string)$data['dtu_add'] : null;
    }
}
