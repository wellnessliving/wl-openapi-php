<?php

namespace WlSdk\Thoth\PayHardware\StripeCom;

/**
 * Response from GET
 */
class StripeComHardwareListGetResponse
{
    /**
     * List of available hardware.
     *
     * @var array|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? (array)$data['a_list'] : null;
    }
}
