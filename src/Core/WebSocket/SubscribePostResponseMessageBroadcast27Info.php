<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcast27Info
{
    /**
     * The date and time of the last SMS in the dialog.
     *
     * @var string|null
     */
    public ?string $dtl_last_activity = null;

    /**
     * A count of unread messages.
     *
     * @var int|null
     */
    public ?int $i_unread_sms = null;

    /**
     * Whether the last SMS is inbound or not.
     *
     * @var bool|null
     */
    public ?bool $is_inbound = null;

    /**
     * The text of last sms.
     *
     * @var string|null
     */
    public ?string $text_last_sms = null;

    /**
     * The UID of the client.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->dtl_last_activity = isset($data['dtl_last_activity']) ? (string)$data['dtl_last_activity'] : null;
        $this->i_unread_sms = isset($data['i_unread_sms']) ? (int)$data['i_unread_sms'] : null;
        $this->is_inbound = isset($data['is_inbound']) ? (bool)$data['is_inbound'] : null;
        $this->text_last_sms = isset($data['text_last_sms']) ? (string)$data['text_last_sms'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
