<?php

namespace WlSdk\Core\Geo\Region;

class RegionGetResponseRegion
{
    /**
     * A list of regions in the country. Every element has the next keys:
     *
     * @var RegionGetResponseRegionRegion|null
     */
    public ?RegionGetResponseRegionRegion $a_region = null;

    /**
     * The locale ID of the country. One of the {@link \WlSdk\Core\Locale\LocaleSid} constants.
     *
     * @var int|null
     */
    public ?int $id_locale = null;

    /**
     * The country key.
     *
     * @var string|null
     */
    public ?string $k_geo_country = null;

    /**
     * The country abbreviation.
     *
     * @var string|null
     */
    public ?string $s_abbr = null;

    /**
     * The name of the country.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->a_region = isset($data['a_region']) ? new RegionGetResponseRegionRegion((array)$data['a_region']) : null;
        $this->id_locale = isset($data['id_locale']) ? (int)$data['id_locale'] : null;
        $this->k_geo_country = isset($data['k_geo_country']) ? (string)$data['k_geo_country'] : null;
        $this->s_abbr = isset($data['s_abbr']) ? (string)$data['s_abbr'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
