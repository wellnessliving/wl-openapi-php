<?php

namespace WlSdk\Wl\Profile\Account\Select;

/**
 * Response from GET
 */
class SelectGetResponse
{
    /**
     * Array with information about current user and his relationship with sub accounts.
     *
     * @var array|null
     */
    public ?array $a_user = null;

    public function __construct(array $data)
    {
        $this->a_user = isset($data['a_user']) ? (array)$data['a_user'] : null;
    }
}
