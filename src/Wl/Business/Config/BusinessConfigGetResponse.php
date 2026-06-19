<?php
namespace WlSdk\Wl\Business\Config;

/**
 * Response from GET
 */
class BusinessConfigGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_business_policy = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_penalty = null;

    /**
     * Whether client must select a location at checkout.
     *
     * @var bool|null
     */
    public ?bool $is_location_client_select = null;

    /**
     * Determines whether staff members should select a location at checkout.
     * 
     * If `true`, staff members should select a location at checkout. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_location_select = null;

    /**
     * Determines whether the business has white label setting enabled in the admin settings.
     * 
     * If `true`, admin settings are enabled. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_white_label = null;

    public function __construct(array $data)
    {
        $this->a_business_policy = isset($data['a_business_policy']) ? (array)$data['a_business_policy'] : null;
        $this->a_penalty = isset($data['a_penalty']) ? (array)$data['a_penalty'] : null;
        $this->is_location_client_select = isset($data['is_location_client_select']) ? (bool)$data['is_location_client_select'] : null;
        $this->is_location_select = isset($data['is_location_select']) ? (bool)$data['is_location_select'] : null;
        $this->is_white_label = isset($data['is_white_label']) ? (bool)$data['is_white_label'] : null;
    }
}
