<?php

namespace WlSdk\Wl\Location\Facility;

/**
 * Response from GET
 */
class FacilitySidGetResponse
{
    /**
     * No description.
     *
     * @var FacilitySidGetResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new FacilitySidGetResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
