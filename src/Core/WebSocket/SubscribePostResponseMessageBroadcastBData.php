<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastBData
{
    /**
     * Message information:
     *
     * @var SubscribePostResponseMessageBroadcastBDataMessage|null
     */
    public ?SubscribePostResponseMessageBroadcastBDataMessage $message = null;

    /**
     * User's information:
     *
     * @var SubscribePostResponseMessageBroadcastBDataUserProfile|null
     */
    public ?SubscribePostResponseMessageBroadcastBDataUserProfile $user_profile = null;

    public function __construct(array $data)
    {
        $this->message = isset($data['message']) ? new SubscribePostResponseMessageBroadcastBDataMessage((array)$data['message']) : null;
        $this->user_profile = isset($data['user_profile']) ? new SubscribePostResponseMessageBroadcastBDataUserProfile((array)$data['user_profile']) : null;
    }
}
