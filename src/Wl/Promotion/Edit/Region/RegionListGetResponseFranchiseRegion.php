<?php

namespace WlSdk\Wl\Promotion\Edit\Region;

class RegionListGetResponseFranchiseRegion
{
    /**
     * `true` if region is selected, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    /**
     * Franchise region key. Primary key in FranchiseRegionSql table.
     *
     * @var string|null
     */
    public ?string $k_franchise_region = null;

    /**
     * Name of the franchise region.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
        $this->k_franchise_region = isset($data['k_franchise_region']) ? (string)$data['k_franchise_region'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
