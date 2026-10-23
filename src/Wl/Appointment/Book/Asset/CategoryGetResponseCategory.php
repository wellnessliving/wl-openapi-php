<?php

namespace WlSdk\Wl\Appointment\Book\Asset;

class CategoryGetResponseCategory
{
    /**
     * `true` - all resources are hidden in this category for White Label mobile application. `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $hide_application = null;

    /**
     * Layout key of the category at the location. `null` if the category has no layout.
     *
     * @var string|null
     */
    public ?string $k_resource_layout = null;

    /**
     * Resource type ID.
     *
     * @var string|null
     */
    public ?string $k_resource_type = null;

    /**
     * Title of resource type.
     *
     * @var string|null
     */
    public ?string $html_title = null;

    /**
     * Title of resource type as text.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->hide_application = isset($data['hide_application']) ? (bool)$data['hide_application'] : null;
        $this->k_resource_layout = isset($data['k_resource_layout']) ? (string)$data['k_resource_layout'] : null;
        $this->k_resource_type = isset($data['k_resource_type']) ? (string)$data['k_resource_type'] : null;
        $this->html_title = isset($data['html_title']) ? (string)$data['html_title'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
