<?php

namespace WlSdk\Core\Request\Api\Application;

class GroupElementDeleteRequest
{
    /**
     * If a group is edited, its key is stored here.
     *
     * Primary key in GroupSql table.
     *
     * `null` if a new group should be created.
     * This value is required for edit and delete operations.
     *
     * @var string|null
     */
    public ?string $k_application_group = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_application_group' => $this->k_application_group,
            ],
            static fn ($v) => $v !== null
        );
    }
}
