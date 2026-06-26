<?php

namespace WlSdk\Wl\Business\Search;

class BusinessInfoGetRequest
{
    /**
     * Array of business keys to retrieve the data. Primary keys in RsBusinessSql table.
     *
     * @var array|null
     */
    public ?array $a_business = null;

    /**
     * User's location latitude in degrees.
     *
     * @var float|null
     */
    public ?float $f_latitude = null;

    /**
     * User's location Longitude in degrees.
     *
     * @var float|null
     */
    public ?float $f_longitude = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_business' => $this->a_business,
            'f_latitude' => $this->f_latitude,
            'f_longitude' => $this->f_longitude,
            ],
            static fn ($v) => $v !== null
        );
    }
}
