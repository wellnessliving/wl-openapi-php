<?php

namespace WlSdk\Core\Request\Api\Application;

/**
 * Response from GET
 */
class GroupGetResponse
{
    /**
     * A group list. Where key is group key, value is the title of the group.
     * `null` if is not initialized yet.
     *
     * @var array|null
     */
    public ?array $a_application_group = null;

    public function __construct(array $data)
    {
        $this->a_application_group = isset($data['a_application_group']) ? (array)$data['a_application_group'] : null;
    }
}
