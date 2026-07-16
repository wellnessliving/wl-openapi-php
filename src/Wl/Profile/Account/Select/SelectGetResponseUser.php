<?php

namespace WlSdk\Wl\Profile\Account\Select;

class SelectGetResponseUser
{
    /**
     * ID of relationship between current user and sub account.
     *
     * @var string|null
     */
    public ?string $id_family_relation = null;

    /**
     * Name of sub account.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * UID of sub account.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->id_family_relation = isset($data['id_family_relation']) ? (string)$data['id_family_relation'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
