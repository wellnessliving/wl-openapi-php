<?php

namespace WlSdk\Core\Request\Api\Application;

class ApplicationElementDeleteRequest
{
    /**
     * If an application is edited, its key is stored here.
     *
     * Primary key in Sql table.
     *
     * `null` if a new group should be created.
     * This value is required for edit and delete operations.
     *
     * @var string|null
     */
    public ?string $k_api_application = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_api_application' => $this->k_api_application,
            ],
            static fn ($v) => $v !== null
        );
    }
}
