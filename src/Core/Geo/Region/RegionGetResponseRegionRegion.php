<?php

namespace WlSdk\Core\Geo\Region;

class RegionGetResponseRegionRegion
{
    /**
     * The region key.
     *
     * @var string|null
     */
    public ?string $k_geo = null;

    /**
     * The name of the region.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->k_geo = isset($data['k_geo']) ? (string)$data['k_geo'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
