<?php

namespace WlSdk\Wl\Location;

class LocationActiveEditGetRequest
{
    /**
     * Whether type of operation is the churn, otherwise - reactivation.
     *
     * @var bool|null
     */
    public ?bool $is_churn = null;

    /**
     * Primary key of business in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Primary key of location in RsLocationSql table.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_churn' => $this->is_churn,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
