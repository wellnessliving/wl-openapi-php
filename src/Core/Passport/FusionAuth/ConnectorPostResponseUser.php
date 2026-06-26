<?php

namespace WlSdk\Core\Passport\FusionAuth;

class ConnectorPostResponseUser
{
    /**
     * Copy of result UserDto::asArray()
     *
     * @var array|null
     */
    public ?array $user = null;

    /**
     * Registration is a copy of UserRegistrationDto::asArray()
     *
     * @var array|null
     */
    public ?array $registrations = null;

    public function __construct(array $data)
    {
        $this->user = isset($data['user']) ? (array)$data['user'] : null;
        $this->registrations = isset($data['registrations']) ? (array)$data['registrations'] : null;
    }
}
