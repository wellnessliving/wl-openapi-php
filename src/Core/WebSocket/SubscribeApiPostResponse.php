<?php
namespace WlSdk\Core\WebSocket;

/**
 * Response from POST
 */
class SubscribeApiPostResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_message_broadcast = null;

    public function __construct(array $data)
    {
        $this->a_message_broadcast = isset($data['a_message_broadcast']) ? (array)$data['a_message_broadcast'] : null;
    }
}
