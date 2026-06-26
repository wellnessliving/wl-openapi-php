<?php

namespace WlSdk\Core\Google;

/**
 * Response from GET
 */
class GoogleCoordinateGetResponse
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

    public function __construct(array $data)
    {
        $this->f_latitude = isset($data['f_latitude']) ? (float)$data['f_latitude'] : null;
        $this->f_longitude = isset($data['f_longitude']) ? (float)$data['f_longitude'] : null;
    }
}
