<?php

namespace WlSdk\Wl\Task\Edit;

class EditDeleteRequest
{
    /**
     * Business key.
     *
     * `null` means not set.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Task key.
     *
     * `null` means not set.
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
