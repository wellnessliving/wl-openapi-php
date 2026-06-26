<?php

namespace WlSdk\Wl\Business\RegionTravel;

class BusinessRegionTravelGetRequest
{
    /**
     * ID of Amazon region that business is travelling to. `null` by default.
     *
     * @var int|null
     * @see \WlSdk\Core\Amazon\Region\AmazonRegionSid
     */
    public ?int $id_region_destination = null;

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
            'id_region_destination' => $this->id_region_destination,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
