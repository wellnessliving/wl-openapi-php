<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastE
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function __construct(array $data)
    {
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
    }
}
