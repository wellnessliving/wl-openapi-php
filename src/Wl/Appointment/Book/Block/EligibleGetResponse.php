<?php

namespace WlSdk\Wl\Appointment\Book\Block;

/**
 * Response from GET
 */
class EligibleGetResponse
{
    /**
     * The selected add-ons that the client is not eligible for, in the order in which they run after the
     * appointment.
     *
     * @var EligibleGetResponseIneligible[]|null
     */
    public ?array $a_ineligible = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function __construct(array $data)
    {
        $this->a_ineligible = isset($data['a_ineligible']) ? array_map(static fn ($item) => new EligibleGetResponseIneligible((array)$item), (array)$data['a_ineligible']) : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
