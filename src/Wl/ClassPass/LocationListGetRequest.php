<?php

namespace WlSdk\Wl\ClassPass;

class LocationListGetRequest
{
    /**
     * Partner ID.
     *
     * @var string|null
     */
    public ?string $s_partner = null;

    public function params(): array
    {
        return array_filter(
            [
            's_partner' => $this->s_partner,
            ],
            static fn ($v) => $v !== null
        );
    }
}
