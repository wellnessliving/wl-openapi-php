<?php
namespace WlSdk\Wl\Appointment\Book\Asset\Service;

class ServiceGetResponseResourceType
{
    /**
     * A list of resources. Every element has the following keys:
     *
     * @var ServiceGetResponseResourceTypeResource|null
     */
    public ?ServiceGetResponseResourceTypeResource $a_resource = null;

    /**
     * The asset's layout key.  This will be `null` if the asset category has no layout.
     *
     * @var string|null
     */
    public ?string $k_resource_layout = null;

    /**
     * The title of asset category.
     *
     * @var string|null
     */
    public ?string $s_resource_type = null;

    public function __construct(array $data)
    {
        $this->a_resource = isset($data['a_resource']) ? new ServiceGetResponseResourceTypeResource((array)$data['a_resource']) : null;
        $this->k_resource_layout = isset($data['k_resource_layout']) ? (string)$data['k_resource_layout'] : null;
        $this->s_resource_type = isset($data['s_resource_type']) ? (string)$data['s_resource_type'] : null;
    }
}
