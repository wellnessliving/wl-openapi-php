<?php

namespace WlSdk\Wl\Zapier\Business;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * List of businesses available for current user.
     *
     * @var array|null
     */
    public ?array $a_business_list = null;

    public function __construct(array $data)
    {
        $this->a_business_list = isset($data['a_business_list']) ? (array)$data['a_business_list'] : null;
    }
}
