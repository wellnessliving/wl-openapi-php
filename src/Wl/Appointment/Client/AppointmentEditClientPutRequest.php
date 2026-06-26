<?php

namespace WlSdk\Wl\Appointment\Client;

class AppointmentEditClientPutRequest
{
    /**
     * Key of the business where operation in performing.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of certain reservation to set client for.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Client key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
