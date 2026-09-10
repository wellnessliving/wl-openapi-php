<?php

namespace WlSdk\Wl\Staff\Location;

class ListGetRequest
{
    /**
     * Business key for which data will be collected.
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
