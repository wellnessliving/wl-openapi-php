<?php

namespace WlSdk\Wl\Location;

class LocationOptionPostRequest
{
    /**
     * Local date of operation.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Whether location is fee.
     *
     * @var bool|null
     */
    public ?bool $is_customer = null;

    /**
     * Key of business. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of location. Primary key in RsLocationSql table.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_start' => $this->dl_start,
            'is_customer' => $this->is_customer,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
