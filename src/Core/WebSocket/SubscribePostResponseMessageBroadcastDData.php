<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastDData
{
    /**
     * Message information:
     *
     * @var SubscribePostResponseMessageBroadcastDDataMessage|null
     */
    public ?SubscribePostResponseMessageBroadcastDDataMessage $message = null;

    /**
     * User's information:
     *
     * @var SubscribePostResponseMessageBroadcastDDataUserProfile|null
     */
    public ?SubscribePostResponseMessageBroadcastDDataUserProfile $user_profile = null;

    public function __construct(array $data)
    {
        $this->message = isset($data['message']) ? new SubscribePostResponseMessageBroadcastDDataMessage((array)$data['message']) : null;
        $this->user_profile = isset($data['user_profile']) ? new SubscribePostResponseMessageBroadcastDDataUserProfile((array)$data['user_profile']) : null;
    }
}
