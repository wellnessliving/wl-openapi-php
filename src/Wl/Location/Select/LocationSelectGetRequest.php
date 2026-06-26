<?php

namespace WlSdk\Wl\Location\Select;

class LocationSelectGetRequest
{
    /**
     * Result-defining configuration set.
     *
     * @var array|null
     */
    public ?array $a_config = null;

    /**
     * Business in which a list of locations is requested.
     * Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User who requests a list of locations.
     * Primary key in PassportLoginSql table.
     *
     * Empty string for a guest.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_config' => $this->a_config,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
