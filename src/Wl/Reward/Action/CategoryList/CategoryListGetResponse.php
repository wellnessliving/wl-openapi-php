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
     * @var CategoryListGetResponseCategory|null
     */
    public ?CategoryListGetResponseCategory $a_category = null;

    public function __construct(array $data)
    {
        $this->a_category = isset($data['a_category']) ? new CategoryListGetResponseCategory((array)$data['a_category']) : null;
    }
}
