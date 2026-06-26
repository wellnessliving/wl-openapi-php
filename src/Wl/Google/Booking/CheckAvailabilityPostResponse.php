<?php

namespace WlSdk\Wl\Google\Booking;

/**
 * Response from POST
 */
class CheckAvailabilityPostResponse
{
    /**
     * See IntegrationDataTrait::toArray() for documentation.
     *
     * @var array|null
     */
    public ?array $a_slot = null;

    /**
     * Count of available slots
     *
     * @var int|null
     */
    public ?int $i_count_available = null;

    public function __construct(array $data)
    {
        $this->a_slot = isset($data['a_slot']) ? (array)$data['a_slot'] : null;
        $this->i_count_available = isset($data['i_count_available']) ? (int)$data['i_count_available'] : null;
    }
}
