<?php

namespace WlSdk\Wl\ClassPass;

/**
 * Response from GET
 */
class BusinessDataGetResponse
{
    /**
     * Information about partner
     *
     * @var array|null
     */
    public ?array $a_partner = null;

    public function __construct(array $data)
    {
        $this->a_partner = isset($data['a_partner']) ? (array)$data['a_partner'] : null;
    }
}
