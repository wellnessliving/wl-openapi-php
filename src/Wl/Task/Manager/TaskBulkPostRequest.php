<?php

namespace WlSdk\Wl\Task\Manager;

class TaskBulkPostRequest
{
    /**
     * Keys of the selected tasks, each at most once, no more than 100: the largest size of a page of the Task
     * Manager.
     *
     * @var string[]|null
     */
    public ?array $a_k_task = null;

    /**
     * Key of the business of the Task Manager. In a franchise in the flexible travel mode the tasks of the other
     * businesses of the franchise may be selected too.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_k_task' => $this->a_k_task,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
