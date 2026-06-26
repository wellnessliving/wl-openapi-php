<?php

namespace WlSdk\Wl\Business\Franchise\Region;

/**
 * Response from POST
 */
class RegionPostResponse
{
    /**
     * Franchise region key. Primary key in the RegionSql table.
     * If `null` need create franchise region.
     *
     * @var string|null
     */
    public ?string $k_franchise_region = null;

    public function __construct(array $data)
    {
        $this->k_franchise_region = isset($data['k_franchise_region']) ? (string)$data['k_franchise_region'] : null;
    }
}
