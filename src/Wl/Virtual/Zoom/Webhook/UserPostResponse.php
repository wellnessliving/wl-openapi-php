<?php

namespace WlSdk\Wl\Virtual\Zoom\Webhook;

/**
 * Response from POST
 */
class UserPostResponse
{
    /**
     * Encrypted token string.
     *
     * @var string|null
     */
    public ?string $s_token_encrypted = null;

    /**
     * Plain token string.
     *
     * @var string|null
     */
    public ?string $s_token_plain = null;

    public function __construct(array $data)
    {
        $this->s_token_encrypted = isset($data['s_token_encrypted']) ? (string)$data['s_token_encrypted'] : null;
        $this->s_token_plain = isset($data['s_token_plain']) ? (string)$data['s_token_plain'] : null;
    }
}
