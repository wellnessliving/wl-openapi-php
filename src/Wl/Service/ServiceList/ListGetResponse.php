<?php

namespace WlSdk\Wl\Service\ServiceList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * No description.
     *
     * @var ListGetResponseService[]|null
     */
    public ?array $a_service = null;

    public function __construct(array $data)
    {
        $this->a_service = isset($data['a_service']) ? array_map(static fn ($item) => new ListGetResponseService((array)$item), (array)$data['a_service']) : null;
    }
}
