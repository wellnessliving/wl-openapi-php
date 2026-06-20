<?php

namespace WlSdk\Wl\Appointment\Book\Service;

class CategoryGetResponseCategory
{
    /**
     * `true` - all services are hidden in this category for White Label mobile application. `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $hide_application = null;

    /**
     * Sort key for category. Used to sort categories on category list page.
     *
     * @var bool|null
     */
    public ?bool $i_sort = null;

    /**
     * Service category key.
     *
     * @var string|null
     */
    public ?string $k_service_category = null;

    /**
     * Service category title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->hide_application = isset($data['hide_application']) ? (bool)$data['hide_application'] : null;
        $this->i_sort = isset($data['i_sort']) ? (bool)$data['i_sort'] : null;
        $this->k_service_category = isset($data['k_service_category']) ? (string)$data['k_service_category'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
