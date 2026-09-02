<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastCData
{
    /**
     * Message information:
     *
     * @var SubscribePostResponseMessageBroadcastCDataMessage|null
     */
    public ?SubscribePostResponseMessageBroadcastCDataMessage $message = null;

    /**
     * User's information:
     *
     * @var SubscribePostResponseMessageBroadcastCDataUserProfile|null
     */
    public ?SubscribePostResponseMessageBroadcastCDataUserProfile $user_profile = null;

    public function __construct(array $data)
    {
        $this->message = isset($data['message']) ? new SubscribePostResponseMessageBroadcastCDataMessage((array)$data['message']) : null;
        $this->user_profile = isset($data['user_profile']) ? new SubscribePostResponseMessageBroadcastCDataUserProfile((array)$data['user_profile']) : null;
    }
}
