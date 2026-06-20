<?php

namespace WlSdk\Wl\Appointment\Book\Service;

class ServiceCheckGetRequest
{
    /**
     * Date of booking in MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The service key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
