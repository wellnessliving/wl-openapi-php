<?php

namespace WlSdk\Wl\Appointment\Book\Asset;

class AssetLocationGetRequest
{
    /**
     * Resource key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_resource' => $this->k_resource,
            ],
            static fn ($v) => $v !== null
        );
    }
}
