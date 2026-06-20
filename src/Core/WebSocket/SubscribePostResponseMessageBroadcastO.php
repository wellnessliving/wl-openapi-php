<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastO
{
    /**
     * The text of the error.
     *
     * @var string|null
     */
    public ?string $html_error_message = null;

    /**
     * The unique key of the sent SMS.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    /**
     * The time in UNIX format when socket message was sent.
     *
     * @var int|null
     */
    public ?int $tl_send = null;

    public function __construct(array $data)
    {
        $this->html_error_message = isset($data['html_error_message']) ? (string)$data['html_error_message'] : null;
        $this->s_key = isset($data['s_key']) ? (string)$data['s_key'] : null;
        $this->tl_send = isset($data['tl_send']) ? (int)$data['tl_send'] : null;
    }
}
