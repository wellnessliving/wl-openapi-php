<?php

namespace WlSdk\Core\Geo;

/**
 * Response from GET
 */
class GeoAddressGetResponse
{
    /**
     * Geo country key. Primary key in the AGeoSql table.
     *
     * @var string|null
     */
    public ?string $k_geo_country = null;

    /**
     * Geo region key. Primary key in the AGeoSql table.
     *
     * @var string|null
     */
    public ?string $k_geo_region = null;

    /**
     * Name of the city.
     *
     * @var string|null
     */
    public ?string $text_city = null;

    public function __construct(array $data)
    {
        $this->k_geo_country = isset($data['k_geo_country']) ? (string)$data['k_geo_country'] : null;
        $this->k_geo_region = isset($data['k_geo_region']) ? (string)$data['k_geo_region'] : null;
        $this->text_city = isset($data['text_city']) ? (string)$data['text_city'] : null;
    }
}
