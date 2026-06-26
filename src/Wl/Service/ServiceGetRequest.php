<?php

namespace WlSdk\Wl\Service;

class ServiceGetRequest
{
    /**
     * Business primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Appointment primary key in RsServiceSql table.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_service' => $this->k_service,
            ],
            static fn ($v) => $v !== null
        );
    }
}
