<?php

namespace WlSdk\Wl\Task\Manager;

class TaskManagerOptionGetRequest
{
    /**
     * Key of the business whose Task Manager the settings belong to.
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
