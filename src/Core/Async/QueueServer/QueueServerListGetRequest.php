<?php

namespace WlSdk\Core\Async\QueueServer;

class QueueServerListGetRequest
{
    /**
     * Name of a provider which information should be shown.
     *
     * @var string|null
     */
    public ?string $s_provider = null;

    public function params(): array
    {
        return array_filter(
            [
            's_provider' => $this->s_provider,
            ],
            static fn ($v) => $v !== null
        );
    }
}
