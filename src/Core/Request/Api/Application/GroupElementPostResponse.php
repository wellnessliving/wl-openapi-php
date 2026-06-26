<?php

namespace WlSdk\Core\Request\Api\Application;

/**
 * Response from POST
 */
class GroupElementPostResponse
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

    public function __construct(array $data)
    {
        $this->k_application_group = isset($data['k_application_group']) ? (string)$data['k_application_group'] : null;
    }
}
