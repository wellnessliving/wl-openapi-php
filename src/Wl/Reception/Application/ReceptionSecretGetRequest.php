<?php

namespace WlSdk\Wl\Reception\Application;

class ReceptionSecretGetRequest
{
    /**
     * Key of the business, where Check In application is started.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location, where Check In application is started.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
