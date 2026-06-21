<?php

namespace WlSdk\Wl\Integration\Curves;

/**
 * Response from GET
 */
class CurvesFranchiseLocationGetResponse
{
    /**
     * The city list. Each element has next structure:
     *
     * @var CurvesFranchiseLocationGetResponseCityList[]|null
     */
    public ?array $a_city_list = null;

    /**
     * The country list. Each element has next structure:
     *
     * @var CurvesFranchiseLocationGetResponseCountryList[]|null
     */
    public ?array $a_country_list = null;

    /**
     * The location list. Each element has the next structure:
     *
     * @var CurvesFranchiseLocationGetResponseLocationList[]|null
     */
    public ?array $a_location_list = null;

    /**
     * The region list. Each element has the next structure:
     *
     * @var CurvesFranchiseLocationGetResponseRegionList[]|null
     */
    public ?array $a_region_list = null;

    /**
     * The state list. Each element has the next structure:
     *
     * @var CurvesFranchiseLocationGetResponseStateList[]|null
     */
    public ?array $a_state_list = null;

    public function __construct(array $data)
    {
        $this->a_city_list = isset($data['a_city_list']) ? array_map(static fn ($item) => new CurvesFranchiseLocationGetResponseCityList((array)$item), (array)$data['a_city_list']) : null;
        $this->a_country_list = isset($data['a_country_list']) ? array_map(static fn ($item) => new CurvesFranchiseLocationGetResponseCountryList((array)$item), (array)$data['a_country_list']) : null;
        $this->a_location_list = isset($data['a_location_list']) ? array_map(static fn ($item) => new CurvesFranchiseLocationGetResponseLocationList((array)$item), (array)$data['a_location_list']) : null;
        $this->a_region_list = isset($data['a_region_list']) ? array_map(static fn ($item) => new CurvesFranchiseLocationGetResponseRegionList((array)$item), (array)$data['a_region_list']) : null;
        $this->a_state_list = isset($data['a_state_list']) ? array_map(static fn ($item) => new CurvesFranchiseLocationGetResponseStateList((array)$item), (array)$data['a_state_list']) : null;
    }
}
