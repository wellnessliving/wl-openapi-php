<?php

namespace WlSdk\Wl\Profile\Password\Reset;

/**
 * Response from POST
 */
class PasswordResetPostResponse
{
    /**
     * `true` if the password reset attempt was last; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_last = null;

    public function __construct(array $data)
    {
        $this->is_last = isset($data['is_last']) ? (bool)$data['is_last'] : null;
    }
}
