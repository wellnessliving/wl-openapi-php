<?php

namespace WlSdk\Wl\Appointment\Edit;

/**
 * Response from GET
 */
class AddonUpdateGetResponse
{
    /**
     * Data to show appointment add-ons:
     *
     * @var AddonUpdateGetResponseAddonData|null
     */
    public ?AddonUpdateGetResponseAddonData $a_addon_data = null;

    public function __construct(array $data)
    {
        $this->a_addon_data = isset($data['a_addon_data']) ? new AddonUpdateGetResponseAddonData((array)$data['a_addon_data']) : null;
    }
}
