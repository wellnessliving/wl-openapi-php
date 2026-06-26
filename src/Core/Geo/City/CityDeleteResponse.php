<?php

namespace WlSdk\Core\Geo\City;

/**
 * Response from DELETE
 */
class CityDeleteResponse
{
    /**
     * `true` if city was removed,
     * `false` if there is no permission to remove city in this environment. See more RemoveView::CAN_REMOVE.
     *
     * @var array|null
     */
    public ?array $is_removed = null;

    public function __construct(array $data)
    {
        $this->is_removed = isset($data['is_removed']) ? (array)$data['is_removed'] : null;
    }
}
