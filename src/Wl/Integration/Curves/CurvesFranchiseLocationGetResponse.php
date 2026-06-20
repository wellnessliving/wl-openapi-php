<?php
namespace WlSdk\Wl\Integration\Curves;

/**
 * Response from GET
 */
class CurvesFranchiseLocationGetResponse
{
    /**
     * No description.
     *
     * @var CurvesFranchiseLocationGetResponseCityList[]|null
     */
    public ?array $a_city_list = null;

    /**
     * No description.
     *
     * @var CurvesFranchiseLocationGetResponseCountryList[]|null
     */
    public ?array $a_country_list = null;

    /**
     * No description.
     *
     * @var CurvesFranchiseLocationGetResponseLocationList[]|null
     */
    public ?array $a_location_list = null;

    /**
     * No description.
     *
     * @var CurvesFranchiseLocationGetResponseRegionList[]|null
     */
    public ?array $a_region_list = null;

    /**
     * No description.
     *
     * @var CurvesFranchiseLocationGetResponseStateList[]|null
     */
    public ?array $a_state_list = null;

    public function __construct(array $data)
    {
        $this->a_city_list = isset($data['a_city_list']) ? array_map(static fn($item) => new CurvesFranchiseLocationGetResponseCityList((array)$item), (array)$data['a_city_list']) : null;
        $this->a_country_list = isset($data['a_country_list']) ? array_map(static fn($item) => new CurvesFranchiseLocationGetResponseCountryList((array)$item), (array)$data['a_country_list']) : null;
        $this->a_location_list = isset($data['a_location_list']) ? array_map(static fn($item) => new CurvesFranchiseLocationGetResponseLocationList((array)$item), (array)$data['a_location_list']) : null;
        $this->a_region_list = isset($data['a_region_list']) ? array_map(static fn($item) => new CurvesFranchiseLocationGetResponseRegionList((array)$item), (array)$data['a_region_list']) : null;
        $this->a_state_list = isset($data['a_state_list']) ? array_map(static fn($item) => new CurvesFranchiseLocationGetResponseStateList((array)$item), (array)$data['a_state_list']) : null;
    }
}
