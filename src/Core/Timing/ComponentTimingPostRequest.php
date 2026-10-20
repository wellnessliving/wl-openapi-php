<?php

namespace WlSdk\Core\Timing;

class ComponentTimingPostRequest
{
    /**
     * List of timing entries. Each entry has next keys:
     *
     * JSON-encoded array may arrive as a `string`.
     *
     * @var array|null
     */
    public ?array $a_timing_list = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_timing_list' => $this->a_timing_list,
            ],
            static fn ($v) => $v !== null
        );
    }
}
