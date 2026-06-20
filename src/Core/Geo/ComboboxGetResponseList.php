<?php

namespace WlSdk\Core\Geo;

class ComboboxGetResponseList
{
    /**
     * The human-readable name of the city, including the state/province and country.
     *
     * @var string|null
     */
    public ?string $s_value = null;

    /**
     * The `k_city` value for the city.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    public function __construct(array $data)
    {
        $this->s_value = isset($data['s_value']) ? (string)$data['s_value'] : null;
        $this->s_key = isset($data['s_key']) ? (string)$data['s_key'] : null;
    }
}
