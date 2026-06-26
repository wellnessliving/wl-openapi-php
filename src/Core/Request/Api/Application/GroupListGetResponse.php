<?php

namespace WlSdk\Core\Request\Api\Application;

/**
 * Response from GET
 */
class GroupListGetResponse
{
    /**
     * A list of access groups.
     *
     * `null` if is not initialized yet.
     *
     * @var array[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? (array)$data['a_list'] : null;
    }
}
