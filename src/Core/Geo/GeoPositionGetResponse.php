<?php

namespace WlSdk\Core\Geo;

/**
 * Response from GET
 */
class GeoPositionGetResponse
{
    /**
     * Latitude coordinate.
     *
     * @var float|null
     */
    public ?float $f_latitude = null;

    /**
     * Longitude coordinate.
     *
     * @var float|null
     */
    public ?float $f_longitude = null;

    /**
     * City primary key in AGeoSql table.
     *
     * @var string|null
     */
    public ?string $k_city = null;

    public function __construct(array $data)
    {
        $this->f_latitude = isset($data['f_latitude']) ? (float)$data['f_latitude'] : null;
        $this->f_longitude = isset($data['f_longitude']) ? (float)$data['f_longitude'] : null;
        $this->k_city = isset($data['k_city']) ? (string)$data['k_city'] : null;
    }
}
