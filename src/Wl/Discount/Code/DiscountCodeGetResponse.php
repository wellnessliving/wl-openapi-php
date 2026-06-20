<?php

namespace WlSdk\Wl\Discount\Code;

/**
 * Response from GET
 */
class DiscountCodeGetResponse
{
    /**
     * Discount codes list.
     *
     * Each element has next structure:
     *
     * @var DiscountCodeGetResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new DiscountCodeGetResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
