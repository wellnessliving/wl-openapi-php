<?php

namespace WlSdk\Wl\Appointment\Book\Block;

/**
 * Response from GET
 */
class AddonListGetResponse
{
    /**
     * The add-ons that can be chosen for the appointment, in the order in which they are shown and run after the
     * appointment. Empty if the appointment has no add-ons.
     *
     * @var AddonListGetResponseAddon[]|null
     */
    public ?array $a_addon = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function __construct(array $data)
    {
        $this->a_addon = isset($data['a_addon']) ? array_map(static fn ($item) => new AddonListGetResponseAddon((array)$item), (array)$data['a_addon']) : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
