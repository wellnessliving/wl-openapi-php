<?php

namespace WlSdk\Wl\Shop\Category\StaffApp;

/**
 * Response from GET
 */
class CategoryGetResponse
{
    /**
     * Categories in online store for business [CategoryApi](/Wl/Shop/Category/Category.json), with next keys:
     *
     * @var CategoryGetResponseShopCategory|null
     */
    public ?CategoryGetResponseShopCategory $a_shop_category = null;

    public function __construct(array $data)
    {
        $this->a_shop_category = isset($data['a_shop_category']) ? new CategoryGetResponseShopCategory((array)$data['a_shop_category']) : null;
    }
}
