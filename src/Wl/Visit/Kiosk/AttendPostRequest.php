<?php

namespace WlSdk\Wl\Visit\Kiosk;

class AttendPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location of the kiosk.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Key of the client.
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
