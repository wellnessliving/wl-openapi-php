<?php

namespace WlSdk\Wl\Zapier\ClientGroup;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * List of client groups of the business.
     *
     * @var array|null
     */
    public ?array $a_client_group = null;

    public function __construct(array $data)
    {
        $this->a_client_group = isset($data['a_client_group']) ? (array)$data['a_client_group'] : null;
    }
}
