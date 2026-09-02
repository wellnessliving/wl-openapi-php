<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastCDataMessage
{
    /**
     * Message key.
     *
     * @var int|null
     */
    public ?int $id = null;

    /**
     * Message text.
     *
     * @var string|null
     */
    public ?string $message = null;

    /**
     * Date/time when the message has been posted.
     *
     * @var string|null
     */
    public ?string $updated_at = null;

    public function __construct(array $data)
    {
        $this->id = isset($data['id']) ? (int)$data['id'] : null;
        $this->message = isset($data['message']) ? (string)$data['message'] : null;
        $this->updated_at = isset($data['updated_at']) ? (string)$data['updated_at'] : null;
    }
}
