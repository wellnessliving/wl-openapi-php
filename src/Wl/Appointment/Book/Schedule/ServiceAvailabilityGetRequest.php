<?php

namespace WlSdk\Wl\Appointment\Book\Schedule;

class ServiceAvailabilityGetRequest
{
    /**
     * End date of search period in MySQL format, in location time zone.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Start date of search period in MySQL format, in location time zone.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Service key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            ],
            static fn ($v) => $v !== null
        );
    }
}
