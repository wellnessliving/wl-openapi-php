<?php

namespace WlSdk\Core\Prg\Task;

class StatListGetRequest
{
    /**
     * Whether queued or erroneous tasks must be returned.
     * 'false' - load of tasks in the queue, `true` - load of erroneous tasks.
     *
     * @var bool|null
     */
    public ?bool $is_erroneous = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_erroneous' => $this->is_erroneous,
            ],
            static fn ($v) => $v !== null
        );
    }
}
