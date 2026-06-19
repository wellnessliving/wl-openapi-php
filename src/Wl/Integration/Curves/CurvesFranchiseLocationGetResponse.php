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
     * @var array[]|null
     */
    public ?array $a_city_list = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_country_list = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_location_list = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_region_list = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_state_list = null;

    public function __construct(array $data)
    {
        $this->a_city_list = isset($data['a_city_list']) ? (array)$data['a_city_list'] : null;
        $this->a_country_list = isset($data['a_country_list']) ? (array)$data['a_country_list'] : null;
        $this->a_location_list = isset($data['a_location_list']) ? (array)$data['a_location_list'] : null;
        $this->a_region_list = isset($data['a_region_list']) ? (array)$data['a_region_list'] : null;
        $this->a_state_list = isset($data['a_state_list']) ? (array)$data['a_state_list'] : null;
    }
}
