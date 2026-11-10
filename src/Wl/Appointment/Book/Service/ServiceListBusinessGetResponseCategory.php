<?php

namespace WlSdk\Wl\Appointment\Book\Service;

class ServiceListBusinessGetResponseCategory
{
    /**
     * List of location keys where this category has at least one active service.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Sort order of the category.
     *
     * @var int|null
     */
    public ?int $i_sort = null;

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
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->i_sort = isset($data['i_sort']) ? (int)$data['i_sort'] : null;
        $this->k_service_category = isset($data['k_service_category']) ? (string)$data['k_service_category'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
