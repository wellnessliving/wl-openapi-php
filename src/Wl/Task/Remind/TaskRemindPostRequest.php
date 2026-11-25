<?php

namespace WlSdk\Wl\Task\Remind;

class TaskRemindPostRequest
{
    /**
     * Key of the business in which the staff member works. In a franchise in the flexible travel mode the task may
     * be
     * of another business of the franchise.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the task whose staff get the reminder.
     *
     * @var string|null
     */
    public ?string $k_task = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_task' => $this->k_task,
            ],
            static fn ($v) => $v !== null
        );
    }
}
