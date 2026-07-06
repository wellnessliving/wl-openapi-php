<?php

namespace WlSdk\Wl\Service\ServiceList;

/**
 * Response from GET
 */
class List75GetResponse
{
    /**
     * Appointment types list:
     *
     * @var List75GetResponseService[]|null
     */
    public ?array $a_service = null;

    public function __construct(array $data)
    {
        $this->a_service = isset($data['a_service']) ? array_map(static fn ($item) => new List75GetResponseService((array)$item), (array)$data['a_service']) : null;
    }
}
