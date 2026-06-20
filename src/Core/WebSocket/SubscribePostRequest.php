<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostRequest
{
    /**
     * Keys of the channel.
     * 
     * Key is name of a key field in a channel controller.
     * Value is its value.
     * 
     * Subscriber will only receive notifications about events in which all these values equal values specified
     * here.
     *
     * @var array|null
     */
    public $a_key = null;

    /**
     * Channel controller CID.
     *
     * @var \WlSdk\Core\WebSocket\ChannelAbstract|null
     */
    public ?\WlSdk\Core\WebSocket\ChannelAbstract $cid_channel = null;

    /**
     * Subscriber password.
     *
     * @var string|null
     */
    public ?string $s_password = null;

    /**
     * Request token.
     * 
     * This token is only used for asynchronous functions, and identifies a specific request.
     *
     * @var string|null
     */
    public ?string $s_token = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_key' => $this->a_key,
            'cid_channel' => $this->cid_channel?->value,
            's_password' => $this->s_password,
            's_token' => $this->s_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
