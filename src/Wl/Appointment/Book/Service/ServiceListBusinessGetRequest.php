<?php

namespace WlSdk\Wl\Appointment\Book\Service;

class ServiceListBusinessGetRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
