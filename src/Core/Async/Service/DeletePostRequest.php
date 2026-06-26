<?php

namespace WlSdk\Core\Async\Service;

class DeletePostRequest
{
    /**
     * Name of a provider which queue should be purged.
     *
     * @var string|null
     */
    public ?string $s_provider = null;

    /**
     * IP address of a queue server at which queue should be purged.
     *
     * Empty string to purge all available queue servers.
     *
     * @var string|null
     */
    public ?string $ip_queue = null;

    /**
     * Name of a function to purge.
     *
     * @var string|null
     */
    public ?string $s_function = null;

    public function params(): array
    {
        return array_filter(
            [
            's_provider' => $this->s_provider,
            'ip_queue' => $this->ip_queue,
            's_function' => $this->s_function,
            ],
            static fn ($v) => $v !== null
        );
    }
}
