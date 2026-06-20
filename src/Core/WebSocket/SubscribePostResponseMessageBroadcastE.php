<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastE
{
    /**
     * Url link to redirect to join virtual meeting.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function __construct(array $data)
    {
        $this->url_redirect = isset($data['url_redirect']) ? (string)$data['url_redirect'] : null;
    }
}
