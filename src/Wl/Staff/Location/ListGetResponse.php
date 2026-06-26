<?php

namespace WlSdk\Wl\Staff\Location;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * List of business staffs with the locations available to them.
     *
     * @var array[]|null
     */
    public ?array $a_location = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
    }
}
