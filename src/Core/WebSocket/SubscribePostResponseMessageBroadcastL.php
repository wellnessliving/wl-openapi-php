<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastL
{
    /**
     * Whether message is active. This is needed to avoid showing previous messages on page reload.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Whether booking is in progress.
     *
     * @var bool|null
     */
    public ?bool $is_booking_in_progress = null;

    public function __construct(array $data)
    {
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_booking_in_progress = isset($data['is_booking_in_progress']) ? (bool)$data['is_booking_in_progress'] : null;
    }
}
