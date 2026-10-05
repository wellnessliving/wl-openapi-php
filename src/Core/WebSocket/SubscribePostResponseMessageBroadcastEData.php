<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastEData
{
    /**
     * Message information:
     *
     * @var SubscribePostResponseMessageBroadcastEDataMessage|null
     */
    public ?SubscribePostResponseMessageBroadcastEDataMessage $message = null;

    /**
     * User's information:
     *
     * @var SubscribePostResponseMessageBroadcastEDataUserProfile|null
     */
    public ?SubscribePostResponseMessageBroadcastEDataUserProfile $user_profile = null;

    public function __construct(array $data)
    {
        $this->message = isset($data['message']) ? new SubscribePostResponseMessageBroadcastEDataMessage((array)$data['message']) : null;
        $this->user_profile = isset($data['user_profile']) ? new SubscribePostResponseMessageBroadcastEDataUserProfile((array)$data['user_profile']) : null;
    }
}
