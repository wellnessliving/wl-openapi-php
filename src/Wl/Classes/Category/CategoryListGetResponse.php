<?php

namespace WlSdk\Wl\Classes\Category;

/**
 * Response from GET
 */
class CategoryListGetResponse
{
    /**
     * The categories of the business: first the categories of classes, then the categories of events, each kind in
     * the
     * order that the business set. Each element:
     *
     * @var CategoryListGetResponseCategory[]|null
     */
    public ?array $a_category = null;

    public function __construct(array $data)
    {
        $this->a_category = isset($data['a_category']) ? array_map(static fn ($item) => new CategoryListGetResponseCategory((array)$item), (array)$data['a_category']) : null;
    }
}
