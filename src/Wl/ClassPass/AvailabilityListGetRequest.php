<?php

namespace WlSdk\Wl\ClassPass;

class AvailabilityListGetRequest
{
    /**
     * End date of the range to search availability.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Start date of the range to search availability.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

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
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            's_partner_id' => $this->s_partner_id,
            's_venue_id' => $this->s_venue_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
