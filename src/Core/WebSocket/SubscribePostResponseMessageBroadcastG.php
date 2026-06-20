<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastG
{
    /**
     * The count with unread alert for the user.
     *
     * @var int|null
     */
    public ?int $i_unread_alert = null;

    /**
     * Whether message is active. This is needed to avoid showing previous messages on page reload.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Whether this is an alert for an SMS message
     *
     * @var bool|null
     */
    public ?bool $is_message = null;

    /**
     * Whether the user should hear a sound when a notification is sent.
     *
     * @var bool|null
     */
    public ?bool $is_sound = null;

    /**
     * Key of the alert that was just sent.
     *
     * `null` means alert was read.
     *
     * @var string|null
     */
    public ?string $k_alert = null;

    public function __construct(array $data)
    {
        $this->i_unread_alert = isset($data['i_unread_alert']) ? (int)$data['i_unread_alert'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_message = isset($data['is_message']) ? (bool)$data['is_message'] : null;
        $this->is_sound = isset($data['is_sound']) ? (bool)$data['is_sound'] : null;
        $this->k_alert = isset($data['k_alert']) ? (string)$data['k_alert'] : null;
    }
}
