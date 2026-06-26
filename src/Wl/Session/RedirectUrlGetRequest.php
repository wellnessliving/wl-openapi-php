<?php

namespace WlSdk\Wl\Session;

class RedirectUrlGetRequest
{
    /**
     * IP address of remote user.
     *
     * @var string|null
     */
    public ?string $ip = null;

    /**
     * URL to encode.
     *
     * @var string|null
     */
    public ?string $url = null;

    public function params(): array
    {
        return array_filter(
            [
            'ip' => $this->ip,
            'url' => $this->url,
            ],
            static fn ($v) => $v !== null
        );
    }
}
