<?php

namespace WlSdk\Wl\Appointment\Book\Service;

class ServiceListBusinessGetResponseService
{
    /**
     * List of location keys where this service is available.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Sort order of the service within its category.
     *
     * @var int|null
     */
    public ?int $i_sort = null;

    /**
     * Service key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * Service category key.
     *
     * @var string|null
     */
    public ?string $k_service_category = null;

    /**
     * Service title.
     *
     * @var string|null
     */
    public ?string $s_service = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->i_sort = isset($data['i_sort']) ? (int)$data['i_sort'] : null;
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
        $this->k_service_category = isset($data['k_service_category']) ? (string)$data['k_service_category'] : null;
        $this->s_service = isset($data['s_service']) ? (string)$data['s_service'] : null;
    }
}
