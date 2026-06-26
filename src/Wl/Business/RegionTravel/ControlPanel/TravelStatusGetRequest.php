<?php

namespace WlSdk\Wl\Business\RegionTravel\ControlPanel;

class TravelStatusGetRequest
{
    /**
     * Key of business that is travelling. `null` by default.
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
