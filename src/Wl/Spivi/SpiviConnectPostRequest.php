<?php

namespace WlSdk\Wl\Spivi;

class SpiviConnectPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Facility ID.
     *
     * @var string|null
     */
    public ?string $s_facility_id = null;

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
            'k_location' => $this->k_location,
            's_facility_id' => $this->s_facility_id,
            's_password' => $this->s_password,
            's_username' => $this->s_username,
            ],
            static fn ($v) => $v !== null
        );
    }
}
