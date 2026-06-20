<?php

namespace WlSdk\Wl\Reward\Action\CategoryList;

/**
 * Response from GET
 */
class CategoryListGetResponse
{
    /**
     * No description.
     *
     * @var CategoryListGetResponseCategory[]|null
     */
    public ?array $a_category = null;

    public function __construct(array $data)
    {
        $this->a_category = isset($data['a_category']) ? array_map(static fn ($item) => new CategoryListGetResponseCategory((array)$item), (array)$data['a_category']) : null;
    }
}
