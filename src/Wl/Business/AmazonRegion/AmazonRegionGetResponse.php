<?php

namespace WlSdk\Wl\Business\AmazonRegion;

/**
 * Response from GET
 */
class AmazonRegionGetResponse
{
    /**
     * List of region IDs for [AmazonRegionApi::$a_business](/Wl/Business/AmazonRegion/AmazonRegion.json).
     *
     * Key - is business key.
     * Value - is region ID. One of {@link \WlSdk\Core\Amazon\Region\AmazonRegionSid} constants.
     *   `0` if this business is from an unknown region.
     *
     * @var int[]|null
     */
    public ?array $a_business_region = null;

    public function __construct(array $data)
    {
        $this->a_business_region = isset($data['a_business_region']) ? (array)$data['a_business_region'] : null;
    }
}
