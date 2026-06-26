<?php

namespace WlSdk\Wl\DoorAccess\Brivo;

class ConnectPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Api key.
     *
     * @var string|null
     */
    public ?string $s_api_key = null;

    /**
     * Client ID.
     *
     * @var string|null
     */
    public ?string $s_client_id = null;

    /**
     * Client secret key.
     *
     * @var string|null
     */
    public ?string $s_client_secret = null;

    /**
     * Password.
     *
     * @var string|null
     */
    public ?string $s_password = null;

    /**
     * Username.
     *
     * @var string|null
     */
    public ?string $s_username = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_api_key' => $this->s_api_key,
            's_client_id' => $this->s_client_id,
            's_client_secret' => $this->s_client_secret,
            's_password' => $this->s_password,
            's_username' => $this->s_username,
            ],
            static fn ($v) => $v !== null
        );
    }
}
