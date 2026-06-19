<?php
namespace WlSdk\Wl\Appointment\Edit;

/**
 * Response from GET
 */
class AddonUpdateApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_addon_data = null;

    public function __construct(array $data)
    {
        $this->a_addon_data = isset($data['a_addon_data']) ? (array)$data['a_addon_data'] : null;
    }
}
