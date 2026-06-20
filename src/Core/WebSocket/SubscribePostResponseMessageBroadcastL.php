<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastL
{
    /**
     * New title of the business.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
