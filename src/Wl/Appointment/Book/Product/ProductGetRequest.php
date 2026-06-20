<?php

namespace WlSdk\Wl\Appointment\Book\Product;

class ProductGetRequest
{
    /**
     * The key of a service to show information for.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_service' => $this->k_service,
            ],
            static fn ($v) => $v !== null
        );
    }
}
