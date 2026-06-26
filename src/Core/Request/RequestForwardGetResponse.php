<?php

namespace WlSdk\Core\Request;

/**
 * Response from GET
 */
class RequestForwardGetResponse
{
    /**
     * Copy of `s_forward`.
     *
     * Key is datacenter ID. One of {@link \WlSdk\Core\Amazon\Region\AmazonRegionSid} constants.
     *
     * Values are copies of `s_forward` as seen on that datacenter.
     * Value is not set if `s_forward` is `null`.
     *
     * @var int[]|null
     */
    public ?array $a_forward = null;

    /**
     * A list of datacenters to which the request was forwarded.
     *
     * One element is region ID, one of {@link \WlSdk\Core\Amazon\Region\AmazonRegionSid} constants.
     *
     * @var int[]|null
     */
    public ?array $a_region = null;

    /**
     * Keys users signed in.
     *
     * Key is datacenter ID. One of {@link \WlSdk\Core\Amazon\Region\AmazonRegionSid} constants.
     *
     * Values are copies of results of passport_uid() on that datacenter.
     *
     * @var int[]|null
     */
    public ?array $a_uid = null;

    public function __construct(array $data)
    {
        $this->a_forward = isset($data['a_forward']) ? (array)$data['a_forward'] : null;
        $this->a_region = isset($data['a_region']) ? (array)$data['a_region'] : null;
        $this->a_uid = isset($data['a_uid']) ? (array)$data['a_uid'] : null;
    }
}
