<?php

namespace WlSdk\Wl\Appointment\Book\Asset\Service;

class ServiceGetResponseResourceTypeResource
{
    /**
     * The asset's image data.
     *
     * @var ServiceGetResponseResourceTypeResourceImage|null
     */
    public ?ServiceGetResponseResourceTypeResourceImage $a_image = null;

    /**
     * Asset quantity.
     *
     * @var int|null
     */
    public ?int $i_quantity = null;

    /**
     * Whether this asset has at least one free unit.
     *
     * @var bool|null
     */
    public ?bool $is_available = null;

    /**
     * The asset key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * The asset title.
     *
     * @var string|null
     */
    public ?string $s_resource = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new ServiceGetResponseResourceTypeResourceImage((array)$data['a_image']) : null;
        $this->i_quantity = isset($data['i_quantity']) ? (int)$data['i_quantity'] : null;
        $this->is_available = isset($data['is_available']) ? (bool)$data['is_available'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->s_resource = isset($data['s_resource']) ? (string)$data['s_resource'] : null;
    }
}
