<?php

namespace WlSdk\Wl\Business\Select;

/**
 * Response from GET
 */
class BusinessSelectGetResponse
{
    /**
     * No description.
     *
     * @var BusinessSelectGetResponseSelect[]|null
     */
    public ?array $a_select = null;

    public function __construct(array $data)
    {
        $this->a_select = isset($data['a_select']) ? array_map(static fn ($item) => new BusinessSelectGetResponseSelect((array)$item), (array)$data['a_select']) : null;
    }
}
