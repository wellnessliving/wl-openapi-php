<?php

namespace WlSdk\Wl\ClassPass;

/**
 * Response from GET
 */
class LocationListGetResponse
{
    /**
     * See LocationListData::toClassPass() for documentation.
     *
     * @var string|null
     */
    public ?string $a_pagination = null;

    /**
     * See LocationListData::toClassPass() for documentation.
     *
     * @var array|null
     */
    public ?array $a_venue_list = null;

    public function __construct(array $data)
    {
        $this->a_pagination = isset($data['a_pagination']) ? (string)$data['a_pagination'] : null;
        $this->a_venue_list = isset($data['a_venue_list']) ? (array)$data['a_venue_list'] : null;
    }
}
