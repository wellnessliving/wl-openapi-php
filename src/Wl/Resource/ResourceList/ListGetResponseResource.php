<?php

namespace WlSdk\Wl\Resource\ResourceList;

class ListGetResponseResource
{
    /**
     * Whether resource will be hidden in the White Label mobile application.
     *  `true` means that resource will not be displayed, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $hide_application = null;

    /**
     * Whether resource is active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Whether resource is bookable.
     *
     * @var bool|null
     */
    public ?bool $is_book = null;

    /**
     * Key of the city for off-site locations.}.
     * `null` if the resource is not an off-site location.
     *
     * @var string|null
     */
    public ?string $k_city = null;

    /**
     * Resource key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Asset layout key.
     *
     * @var string|null
     */
    public ?string $k_resource_layout = null;

    /**
     * Resource type key.
     *
     * @var string|null
     */
    public ?string $k_resource_type = null;

    /**
     * Street address of the resource for off-site locations.
     * Empty string if the resource does not have an off-site address.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * Additional directions or access tips for reaching an off-site location.
     * Empty string if not specified.
     *
     * @var string|null
     */
    public ?string $text_guide = null;

    /**
     * Postal code of the resource for off-site locations.
     * Empty string if the resource does not have an off-site address.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * Resource name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->hide_application = isset($data['hide_application']) ? (bool)$data['hide_application'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_book = isset($data['is_book']) ? (bool)$data['is_book'] : null;
        $this->k_city = isset($data['k_city']) ? (string)$data['k_city'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->k_resource_layout = isset($data['k_resource_layout']) ? (string)$data['k_resource_layout'] : null;
        $this->k_resource_type = isset($data['k_resource_type']) ? (string)$data['k_resource_type'] : null;
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->text_guide = isset($data['text_guide']) ? (string)$data['text_guide'] : null;
        $this->text_postal = isset($data['text_postal']) ? (string)$data['text_postal'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
