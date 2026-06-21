<?php

namespace WlSdk\Wl\Business\Franchise\Location;

/**
 * Response from GET
 */
class BusinessFranchiseLocationGetResponse
{
    /**
     * The city list. Each element has next structure:
     *
     * @var BusinessFranchiseLocationGetResponseCityList[]|null
     */
    public ?array $a_city_list = null;

    /**
     * The country list. Each element has next structure:
     *
     * @var BusinessFranchiseLocationGetResponseCountryList[]|null
     */
    public ?array $a_country_list = null;

    /**
     * The location list. Each element has the next structure:
     *
     * @var BusinessFranchiseLocationGetResponseLocationList[]|null
     */
    public ?array $a_location_list = null;

    /**
     * The region list. Each element has the next structure:
     *
     * @var BusinessFranchiseLocationGetResponseRegionList[]|null
     */
    public ?array $a_region_list = null;

    /**
     * The state list. Each element has the next structure:
     *
     * @var BusinessFranchiseLocationGetResponseStateList[]|null
     */
    public ?array $a_state_list = null;

    public function __construct(array $data)
    {
        $this->a_city_list = isset($data['a_city_list']) ? array_map(static fn ($item) => new BusinessFranchiseLocationGetResponseCityList((array)$item), (array)$data['a_city_list']) : null;
        $this->a_country_list = isset($data['a_country_list']) ? array_map(static fn ($item) => new BusinessFranchiseLocationGetResponseCountryList((array)$item), (array)$data['a_country_list']) : null;
        $this->a_location_list = isset($data['a_location_list']) ? array_map(static fn ($item) => new BusinessFranchiseLocationGetResponseLocationList((array)$item), (array)$data['a_location_list']) : null;
        $this->a_region_list = isset($data['a_region_list']) ? array_map(static fn ($item) => new BusinessFranchiseLocationGetResponseRegionList((array)$item), (array)$data['a_region_list']) : null;
        $this->a_state_list = isset($data['a_state_list']) ? array_map(static fn ($item) => new BusinessFranchiseLocationGetResponseStateList((array)$item), (array)$data['a_state_list']) : null;
    }
}
