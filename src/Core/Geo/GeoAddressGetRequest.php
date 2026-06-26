<?php

namespace WlSdk\Core\Geo;

class GeoAddressGetRequest
{
    /**
     * Geo city key. Primary key in the AGeoSql table.
     *
     * @var string|null
     */
    public ?string $k_geo_city = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_geo_city' => $this->k_geo_city,
            ],
            static fn ($v) => $v !== null
        );
    }
}
