<?php

namespace WlSdk\Core\Prg\Task;

class QueueListGetRequest
{
    /**
     * List of prefix of the task class for task search. Empty array - all task select.
     *
     * @var array|null
     */
    public ?array $a_prefix = null;

    /**
     * Whether queued or erroneous tasks must be returned.
     * 'false' - load of tasks in the queue, `true` - load of erroneous tasks.
     *
     * @var bool|null
     */
    public ?bool $is_erroneous = null;

    /**
     * Prefix of task IDs for task search. Empty value - no ID search, selecting all tasks.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_prefix' => $this->a_prefix,
            'is_erroneous' => $this->is_erroneous,
            's_id' => $this->s_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
