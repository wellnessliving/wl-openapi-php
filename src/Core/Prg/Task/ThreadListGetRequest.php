<?php

namespace WlSdk\Core\Prg\Task;

class ThreadListGetRequest
{
    /**
     * Determines where to get information from.
     * `true` - from a cache (default), `no` - receiving current data from servers.
     *
     * @var bool|null
     */
    public ?bool $is_cache = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_cache' => $this->is_cache,
            ],
            static fn ($v) => $v !== null
        );
    }
}
