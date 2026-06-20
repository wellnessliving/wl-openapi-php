<?php
namespace WlSdk\Wl\Shop\Category;

/**
 * Response from GET
 */
class CategoryGetResponse
{
    /**
     * An array containing information about all store categories.
     * Each array element is an array containing the following fields:
     *
     * @var CategoryGetResponseShopCategory|null
     */
    public ?CategoryGetResponseShopCategory $a_shop_category = null;

    public function __construct(array $data)
    {
        $this->a_shop_category = isset($data['a_shop_category']) ? new CategoryGetResponseShopCategory((array)$data['a_shop_category']) : null;
    }
}
