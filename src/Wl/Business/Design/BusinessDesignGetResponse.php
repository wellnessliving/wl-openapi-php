<?php

namespace WlSdk\Wl\Business\Design;

/**
 * Response from GET
 */
class BusinessDesignGetResponse
{
    /**
     * Design data for a business.
     *
     * Contains the following keys:
     *
     * @var BusinessDesignGetResponseData|null
     */
    public ?BusinessDesignGetResponseData $a_data = null;

    public function __construct(array $data)
    {
        $this->a_data = isset($data['a_data']) ? new BusinessDesignGetResponseData((array)$data['a_data']) : null;
    }
}
