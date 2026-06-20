<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostRequest
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_key = null;

    /**
     * Channel controller CID.
     *
     * @var int|null
     */
    public ?int $cid_channel = null;

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
            'cid_channel' => $this->cid_channel,
            's_password' => $this->s_password,
            's_token' => $this->s_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
