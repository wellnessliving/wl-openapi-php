<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastT
{
    /**
     * Key of the client type.
     * 
     * `null` if client type is not set.
     *
     * @var string|null
     */
    public ?string $k_login_type = null;

    /**
     * Key of the user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->k_login_type = isset($data['k_login_type']) ? (string)$data['k_login_type'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
