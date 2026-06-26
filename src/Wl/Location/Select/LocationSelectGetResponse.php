<?php

namespace WlSdk\Wl\Location\Select;

/**
 * Response from GET
 */
class LocationSelectGetResponse
{
    /**
     * Location list with additional parameters for a location select HTML component.
     *
     * @var array|null
     */
    public ?array $a_select = null;

    public function __construct(array $data)
    {
        $this->a_select = isset($data['a_select']) ? (array)$data['a_select'] : null;
    }
}
