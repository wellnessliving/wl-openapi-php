<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastGData
{
    /**
     * Message information:
     *
     * @var SubscribePostResponseMessageBroadcastGDataMessage|null
     */
    public ?SubscribePostResponseMessageBroadcastGDataMessage $message = null;

    /**
     * User's information:
     *
     * @var SubscribePostResponseMessageBroadcastGDataUserProfile|null
     */
    public ?SubscribePostResponseMessageBroadcastGDataUserProfile $user_profile = null;

    public function __construct(array $data)
    {
        $this->message = isset($data['message']) ? new SubscribePostResponseMessageBroadcastGDataMessage((array)$data['message']) : null;
        $this->user_profile = isset($data['user_profile']) ? new SubscribePostResponseMessageBroadcastGDataUserProfile((array)$data['user_profile']) : null;
    }
}
