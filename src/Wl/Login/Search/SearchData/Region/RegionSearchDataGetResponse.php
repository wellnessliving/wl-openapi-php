<?php

namespace WlSdk\Wl\Login\Search\SearchData\Region;

/**
 * Response from GET
 */
class RegionSearchDataGetResponse
{
    /**
     * List of countries and nested regions.
     *
     * @var RegionSearchDataGetResponseGeo[]|null
     */
    public ?array $a_geo = null;

    public function __construct(array $data)
    {
        $this->a_geo = isset($data['a_geo']) ? array_map(static fn ($item) => new RegionSearchDataGetResponseGeo((array)$item), (array)$data['a_geo']) : null;
    }
}
