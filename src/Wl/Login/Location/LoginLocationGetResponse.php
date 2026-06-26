<?php

namespace WlSdk\Wl\Login\Location;

/**
 * Response from GET
 */
class LoginLocationGetResponse
{
    /**
     * Keys of locations. Primary keys in RsLocationSql table.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
    }
}
