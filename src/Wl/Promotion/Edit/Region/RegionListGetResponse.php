<?php

namespace WlSdk\Wl\Promotion\Edit\Region;

/**
 * Response from GET
 */
class RegionListGetResponse
{
    /**
     * List of franchise regions.
     * Has next structure:
     *
     * @var RegionListGetResponseFranchiseRegion[]|null
     */
    public ?array $a_franchise_region = null;

    public function __construct(array $data)
    {
        $this->a_franchise_region = isset($data['a_franchise_region']) ? array_map(static fn ($item) => new RegionListGetResponseFranchiseRegion((array)$item), (array)$data['a_franchise_region']) : null;
    }
}
