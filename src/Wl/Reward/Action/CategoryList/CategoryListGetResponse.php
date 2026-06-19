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
     * @var array[]|null
     */
    public ?array $a_category = null;

    public function __construct(array $data)
    {
        $this->a_category = isset($data['a_category']) ? (array)$data['a_category'] : null;
    }
}
