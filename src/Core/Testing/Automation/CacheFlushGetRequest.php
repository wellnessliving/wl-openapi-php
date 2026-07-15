<?php

namespace WlSdk\Core\Testing\Automation;

class CacheFlushGetRequest
{
    /**
     * Name of the action to perform within this endpoint.
     *
     * @var string|null
     */
    public ?string $s_action = null;

    /**
     * Request authentication token.
     *
     * A hex-encoded `sha256` signature that proves the caller knows the shared secret.
     * See `checkAccess()` for the expected formula.
     *
     * @var string|null
     */
    public ?string $s_token = null;

    public function params(): array
    {
        return array_filter(
            [
            's_action' => $this->s_action,
            's_token' => $this->s_token,
            ],
            static fn ($v) => $v !== null
        );
    }
}
