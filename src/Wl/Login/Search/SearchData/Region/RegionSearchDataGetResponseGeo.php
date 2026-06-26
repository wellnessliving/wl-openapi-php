<?php

namespace WlSdk\Wl\Login\Search\SearchData\Region;

class RegionSearchDataGetResponseGeo
{
    /**
     * List of regions within the country.
     *
     * @var RegionSearchDataGetResponseGeoRegion|null
     */
    public ?RegionSearchDataGetResponseGeoRegion $a_region = null;

    /**
     * Country key.
     *
     * @var string|null
     */
    public ?string $k_geo = null;

    /**
     * Country name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_region = isset($data['a_region']) ? new RegionSearchDataGetResponseGeoRegion((array)$data['a_region']) : null;
        $this->k_geo = isset($data['k_geo']) ? (string)$data['k_geo'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
