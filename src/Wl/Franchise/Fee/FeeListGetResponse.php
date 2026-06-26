<?php

namespace WlSdk\Wl\Franchise\Fee;

/**
 * Response from GET
 */
class FeeListGetResponse
{
    /**
     * List of franchise fee.
     *
     * @var FeeListGetResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new FeeListGetResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
