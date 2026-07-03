<?php

namespace WlSdk\Wl\Session;

class EnvironmentPutRequest
{
    /**
     * Application ID.
     *
     * @var string|null
     */
    public ?string $s_application_id = null;

    /**
     * `true` if you want the API to switch to staff back office; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_staff = null;

    /**
     * Key of business to be set as current.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of location to be set as current.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Key to check session in a case of business change.
     *
     * @var string|null
     */
    public ?string $s_business_change = null;

    public function params(): array
    {
        return array_filter(
            [
            's_application_id' => $this->s_application_id,
            'is_staff' => $this->is_staff,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            's_business_change' => $this->s_business_change,
            ],
            static fn ($v) => $v !== null
        );
    }
}
