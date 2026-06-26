<?php

namespace WlSdk\Wl\Location;

class LocationActiveLogPostRequest
{
    /**
     * Local date of operation.
     *
     * @var string|null
     */
    public ?string $dl_operation = null;

    /**
     * Primary key of business in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Primary key of location in RsLocationSql table.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Primary key of location active log in LocationActiveLogSql table.
     *
     * @var string|null
     */
    public ?string $k_location_active_log = null;

    /**
     * Reason of the change of location status.
     *
     * @var string|null
     */
    public ?string $text_reason = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_operation' => $this->dl_operation,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_location_active_log' => $this->k_location_active_log,
            'text_reason' => $this->text_reason,
            ],
            static fn ($v) => $v !== null
        );
    }
}
