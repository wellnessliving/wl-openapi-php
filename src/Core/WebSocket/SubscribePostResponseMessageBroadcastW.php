<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastW
{
    /**
     * `true` - access is granted; `false` - denied.
     *
     * @var bool|null
     */
    public ?bool $is_grant = null;

    /**
     * Full name of user-receiver of response.
     *
     * @var string|null
     */
    public ?string $text_full_name = null;

    /**
     * The time in seconds with fractional part in UNIX format when socket message was sent.
     *
     * @var float|null
     */
    public ?float $tu_send = null;

    public function __construct(array $data)
    {
        $this->is_grant = isset($data['is_grant']) ? (bool)$data['is_grant'] : null;
        $this->text_full_name = isset($data['text_full_name']) ? (string)$data['text_full_name'] : null;
        $this->tu_send = isset($data['tu_send']) ? (float)$data['tu_send'] : null;
    }
}
