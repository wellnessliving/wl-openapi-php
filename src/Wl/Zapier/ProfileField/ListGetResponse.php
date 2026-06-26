<?php

namespace WlSdk\Wl\Zapier\ProfileField;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * List of profile field of the business.
     *
     * @var array|null
     */
    public ?array $a_field_list = null;

    public function __construct(array $data)
    {
        $this->a_field_list = isset($data['a_field_list']) ? (array)$data['a_field_list'] : null;
    }
}
