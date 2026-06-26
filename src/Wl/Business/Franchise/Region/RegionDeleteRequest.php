<?php

namespace WlSdk\Wl\Business\Franchise\Region;

class RegionDeleteRequest
{
    /**
     * Business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Franchise region key. Primary key in the RegionSql table.
     * If `null` need create franchise region.
     *
     * @var string|null
     */
    public ?string $k_franchise_region = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_franchise_region' => $this->k_franchise_region,
            ],
            static fn ($v) => $v !== null
        );
    }
}
