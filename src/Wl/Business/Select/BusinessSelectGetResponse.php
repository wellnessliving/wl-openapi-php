<?php

namespace WlSdk\Wl\Business\Select;

/**
 * Response from GET
 */
class BusinessSelectGetResponse
{
    /**
     * Business list with additional parameters for a business select HTML component.
     * This array contains the following keys and values.
     *
     * @var BusinessSelectGetResponseSelect|null
     */
    public ?BusinessSelectGetResponseSelect $a_select = null;

    public function __construct(array $data)
    {
        $this->a_select = isset($data['a_select']) ? new BusinessSelectGetResponseSelect((array)$data['a_select']) : null;
    }
}
