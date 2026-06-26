<?php

namespace WlSdk\Wl\Location;

/**
 * Response from GET
 */
class LocationAddPermissionGetResponse
{
    /**
     * `true` if the user has the privilege to add locations, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $has_add_permission = null;

    public function __construct(array $data)
    {
        $this->has_add_permission = isset($data['has_add_permission']) ? (bool)$data['has_add_permission'] : null;
    }
}
