<?php

namespace WlSdk\Wl\Login\Permission\Access;

/**
 * Response from GET
 */
class AccessGetResponse
{
    /**
     * Schedule access information. Has structure:
     *
     * @var AccessGetResponseAccess|null
     */
    public ?AccessGetResponseAccess $a_access = null;

    /**
     * Whether user is traveller in current business.
     *
     * @var bool|null
     */
    public ?bool $is_traveller = null;

    public function __construct(array $data)
    {
        $this->a_access = isset($data['a_access']) ? new AccessGetResponseAccess((array)$data['a_access']) : null;
        $this->is_traveller = isset($data['is_traveller']) ? (bool)$data['is_traveller'] : null;
    }
}
