<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastB
{
    /**
     * Key of a book/visit.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    public function __construct(array $data)
    {
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
    }
}
