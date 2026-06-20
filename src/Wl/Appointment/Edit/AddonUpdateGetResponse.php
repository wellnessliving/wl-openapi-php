<?php

namespace WlSdk\Wl\Appointment\Edit;

/**
 * Response from GET
 */
class AddonUpdateGetResponse
{
    /**
     * No description.
     *
     * @var AddonUpdateGetResponseAddonData[]|null
     */
    public ?array $a_addon_data = null;

    public function __construct(array $data)
    {
        $this->a_addon_data = isset($data['a_addon_data']) ? array_map(static fn ($item) => new AddonUpdateGetResponseAddonData((array)$item), (array)$data['a_addon_data']) : null;
    }
}
