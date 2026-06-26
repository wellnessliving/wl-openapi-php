<?php

namespace WlSdk\Wl\Business\RegionTravel;

/**
 * Response from GET
 */
class BusinessRegionTravelGetResponse
{
    /**
     * `true` if business passed full check and can initiate travel. `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_full_check_pass = null;

    public function __construct(array $data)
    {
        $this->is_full_check_pass = isset($data['is_full_check_pass']) ? (bool)$data['is_full_check_pass'] : null;
    }
}
