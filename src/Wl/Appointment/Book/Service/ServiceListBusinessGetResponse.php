<?php

namespace WlSdk\Wl\Appointment\Book\Service;

/**
 * Response from GET
 */
class ServiceListBusinessGetResponse
{
    /**
     * A list of service categories of the business.
     *
     * Each element has the following structure:
     *
     * @var ServiceListBusinessGetResponseCategory[]|null
     */
    public ?array $a_category = null;

    /**
     * A list of appointment services of the business.
     *
     * Each element has the following structure:
     *
     * @var ServiceListBusinessGetResponseService[]|null
     */
    public ?array $a_service = null;

    public function __construct(array $data)
    {
        $this->a_category = isset($data['a_category']) ? array_map(static fn ($item) => new ServiceListBusinessGetResponseCategory((array)$item), (array)$data['a_category']) : null;
        $this->a_service = isset($data['a_service']) ? array_map(static fn ($item) => new ServiceListBusinessGetResponseService((array)$item), (array)$data['a_service']) : null;
    }
}
