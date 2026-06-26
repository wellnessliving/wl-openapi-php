<?php

namespace WlSdk\Wl\ClassPass;

class ServiceListGetRequest
{
    /**
     * Partner ID.
     *
     * @var string|null
     */
    public ?string $s_partner_id = null;

    /**
     * Venue ID.
     *
     * @var string|null
     */
    public ?string $s_venue_id = null;

    public function params(): array
    {
        return array_filter(
            [
            's_partner_id' => $this->s_partner_id,
            's_venue_id' => $this->s_venue_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
