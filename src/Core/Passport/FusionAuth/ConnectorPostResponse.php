<?php

namespace WlSdk\Core\Passport\FusionAuth;

/**
 * Response from POST
 */
class ConnectorPostResponse
{
    /**
     * The user data.
     *
     * The result is an array with all user fields and a registrations key containing an array of registration
     * objects.
     *
     * Contains the result of merging two objects:
     *
     * @var ConnectorPostResponseUser|null
     */
    public ?ConnectorPostResponseUser $a_user = null;

    public function __construct(array $data)
    {
        $this->a_user = isset($data['a_user']) ? new ConnectorPostResponseUser((array)$data['a_user']) : null;
    }
}
