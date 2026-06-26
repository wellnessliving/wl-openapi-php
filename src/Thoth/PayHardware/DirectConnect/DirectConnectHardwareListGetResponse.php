<?php

namespace WlSdk\Thoth\PayHardware\DirectConnect;

/**
 * Response from GET
 */
class DirectConnectHardwareListGetResponse
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
