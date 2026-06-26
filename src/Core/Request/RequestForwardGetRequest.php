<?php

namespace WlSdk\Core\Request;

class RequestForwardGetRequest
{
    /**
     * Example string which may be used to see if data is correctly forwarded.
     *
     * @var string|null
     */
    public ?string $s_forward = null;

    public function params(): array
    {
        return array_filter(
            [
            's_forward' => $this->s_forward,
            ],
            static fn ($v) => $v !== null
        );
    }
}
