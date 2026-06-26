<?php

namespace WlSdk\Wl\Location;

class LocationActiveEditPostRequest
{
    /**
     * Local date of operation.
     *
     * @var string|null
     */
    public ?string $dl_operation = null;

    /**
     * Whether type of operation is the churn, otherwise - reactivation.
     *
     * @var bool|null
     */
    public ?bool $is_churn = null;

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
            'is_churn' => $this->is_churn,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'text_reason' => $this->text_reason,
            ],
            static fn ($v) => $v !== null
        );
    }
}
