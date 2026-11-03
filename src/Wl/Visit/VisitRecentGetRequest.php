<?php

namespace WlSdk\Wl\Visit;

class VisitRecentGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key.
     *
     * Used to determine the time zone for the day boundaries.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
