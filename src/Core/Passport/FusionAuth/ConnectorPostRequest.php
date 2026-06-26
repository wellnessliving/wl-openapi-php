<?php

namespace WlSdk\Core\Passport\FusionAuth;

class ConnectorPostRequest
{
    /**
     * The application ID.
     *
     * This is used to identify the application in `FusionAuth`.
     *
     * @var string|null
     */
    public ?string $s_application_id = null;

    /**
     * The user login.
     *
     * @var string|null
     */
    public ?string $s_login = null;

    /**
     * The user password.
     *
     * @var string|null
     */
    public ?string $s_password = null;

    public function params(): array
    {
        return array_filter(
            [
            's_application_id' => $this->s_application_id,
            's_login' => $this->s_login,
            's_password' => $this->s_password,
            ],
            static fn ($v) => $v !== null
        );
    }
}
