<?php

namespace WlSdk\Wl\Session;

class StatusGetRequest
{
    /**
     * IP address of remote user.
     *
     * @var string|null
     */
    public ?string $ip = null;

    public function params(): array
    {
        return array_filter(
            [
            'ip' => $this->ip,
            ],
            static fn ($v) => $v !== null
        );
    }
}
