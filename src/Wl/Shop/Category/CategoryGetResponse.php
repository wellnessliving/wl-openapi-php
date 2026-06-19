<?php
namespace WlSdk\Wl\Shop\Category;

/**
 * Response from GET
 */
class CategoryGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_shop_category = null;

    public function __construct(array $data)
    {
        $this->a_shop_category = isset($data['a_shop_category']) ? (array)$data['a_shop_category'] : null;
    }
}
