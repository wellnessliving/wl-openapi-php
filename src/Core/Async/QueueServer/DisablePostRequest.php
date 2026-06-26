<?php

namespace WlSdk\Core\Async\QueueServer;

class DisablePostRequest
{
    /**
     * Name of a provider which queue server should be disabled or activated.
     *
     * @var string|null
     */
    public ?string $s_provider = null;

    /**
     * IP address of a queue server that should be disabled or activated.
     *
     * @var string|null
     */
    public ?string $ip_queue = null;

    /**
     * Whether this queue server should be disabled or activated.
     *
     * `true` to activate this queue server.
     *
     * `false` to disable this queue server.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    public function params(): array
    {
        return array_filter(
            [
            's_provider' => $this->s_provider,
            'ip_queue' => $this->ip_queue,
            'is_active' => $this->is_active,
            ],
            static fn ($v) => $v !== null
        );
    }
}
