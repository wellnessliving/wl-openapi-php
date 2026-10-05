<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcast26InvalidAddress
{
    /**
     * Address string.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * City title.
     *
     * @var string|null
     */
    public ?string $text_city = null;

    /**
     * Country title.
     *
     * @var string|null
     */
    public ?string $text_country = null;

    /**
     * Postal address.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * State.
     *
     * @var string|null
     */
    public ?string $text_state = null;

    public function __construct(array $data)
    {
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->text_city = isset($data['text_city']) ? (string)$data['text_city'] : null;
        $this->text_country = isset($data['text_country']) ? (string)$data['text_country'] : null;
        $this->text_postal = isset($data['text_postal']) ? (string)$data['text_postal'] : null;
        $this->text_state = isset($data['text_state']) ? (string)$data['text_state'] : null;
    }
}
