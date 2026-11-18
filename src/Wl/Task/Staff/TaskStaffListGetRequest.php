<?php

namespace WlSdk\Wl\Task\Staff;

class TaskStaffListGetRequest
{
    /**
     * Business key.
     *
     * `null` means not set.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
