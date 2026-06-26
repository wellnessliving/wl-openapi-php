<?php

namespace WlSdk\Core\Request\Api\Application;

/**
 * Response from POST
 */
class ApplicationElementPostResponse
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

    public function __construct(array $data)
    {
        $this->k_api_application = isset($data['k_api_application']) ? (string)$data['k_api_application'] : null;
    }
}
