<?php

namespace WlSdk\Wl\ClassPass;

/**
 * Response from GET
 */
class ServiceListGetResponse
{
    /**
     * Pagination information. See Pagination.
     *
     * @var array|null
     */
    public ?array $a_pagination = null;

    /**
     * List of services.
     *
     * @var ServiceListGetResponseService[]|null
     */
    public ?array $a_service = null;

    public function __construct(array $data)
    {
        $this->a_pagination = isset($data['a_pagination']) ? (array)$data['a_pagination'] : null;
        $this->a_service = isset($data['a_service']) ? array_map(static fn ($item) => new ServiceListGetResponseService((array)$item), (array)$data['a_service']) : null;
    }
}
