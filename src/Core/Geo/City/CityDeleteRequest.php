<?php

namespace WlSdk\Core\Geo\City;

class CityDeleteRequest
{
    /**
     * Key of the city.
     *
     * @var string|null
     */
    public ?string $k_city = null;

    /**
     * Key of the city to use instead of removed city. Is used only, when you remove some record.
     *
     * @var string|null
     */
    public ?string $k_city_replace = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_city' => $this->k_city,
            'k_city_replace' => $this->k_city_replace,
            ],
            static fn ($v) => $v !== null
        );
    }
}
