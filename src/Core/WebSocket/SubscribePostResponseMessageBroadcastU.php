<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastU
{
    /**
     * The count with unread SMS in the business.
     *
     * @var int|null
     */
    public ?int $i_unread_sms = null;

    public function __construct(array $data)
    {
        $this->i_unread_sms = isset($data['i_unread_sms']) ? (int)$data['i_unread_sms'] : null;
    }
}
