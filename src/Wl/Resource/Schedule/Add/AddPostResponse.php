<?php

namespace WlSdk\Wl\Resource\Schedule\Add;

/**
 * Response from POST
 */
class AddPostResponse
{
    /**
     * Resource period key.
     * Primary key from the `rs_resource_period` table.
     *
     * @var string[]|null
     */
    public ?array $a_resource_period = null;

    public function __construct(array $data)
    {
        $this->a_resource_period = isset($data['a_resource_period']) ? (array)$data['a_resource_period'] : null;
    }
}
