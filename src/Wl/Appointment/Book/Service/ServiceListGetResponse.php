<?php

namespace WlSdk\Wl\Appointment\Book\Service;

/**
 * Response from GET
 */
class ServiceListGetResponse
{
    /**
     * No description.
     *
     * @var ServiceListGetResponseService[]|null
     */
    public ?array $a_service = null;

    /**
     * Whether services allow multiple appointment booking.
     *
     * @var bool|null
     */
    public ?bool $is_multiple_booking = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function __construct(array $data)
    {
        $this->a_service = isset($data['a_service']) ? array_map(static fn ($item) => new ServiceListGetResponseService((array)$item), (array)$data['a_service']) : null;
        $this->is_multiple_booking = isset($data['is_multiple_booking']) ? (bool)$data['is_multiple_booking'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
