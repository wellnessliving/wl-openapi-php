<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastV
{
    /**
     * `true` if the request has been already processed (question window must not be shown);
     * `false` otherwise (question window must be shown).
     *
     * @var bool|null
     */
    public ?bool $is_close = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Name of the user requesting access.
     *
     * @var string|null
     */
    public ?string $text_full_name = null;

    /**
     * Location title.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * Key of user who request access to location.
     *
     * @var string|null
     */
    public ?string $uid_request = null;

    public function __construct(array $data)
    {
        $this->is_close = isset($data['is_close']) ? (bool)$data['is_close'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->text_full_name = isset($data['text_full_name']) ? (string)$data['text_full_name'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->uid_request = isset($data['uid_request']) ? (string)$data['uid_request'] : null;
    }
}
