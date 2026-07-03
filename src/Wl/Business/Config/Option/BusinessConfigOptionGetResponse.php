<?php

namespace WlSdk\Wl\Business\Config\Option;

/**
 * Response from GET
 */
class BusinessConfigOptionGetResponse
{
    /**
     * List of config option values.
     * Key - config option class CID.
     * Values - config option value.
     *
     * @var string[]|null
     */
    public ?array $a_option = null;

    public function __construct(array $data)
    {
        $this->a_option = isset($data['a_option']) ? (array)$data['a_option'] : null;
    }
}
