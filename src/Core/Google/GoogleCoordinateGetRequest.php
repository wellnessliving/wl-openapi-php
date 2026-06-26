<?php

namespace WlSdk\Core\Google;

class GoogleCoordinateGetRequest
{
    /**
     * Address to get geo position for.
     *
     * @var string|null
     */
    public ?string $s_address = null;

    public function params(): array
    {
        return array_filter(
            [
            's_address' => $this->s_address,
            ],
            static fn ($v) => $v !== null
        );
    }
}
