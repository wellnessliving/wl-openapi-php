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
     * @var CategoryGetResponseShopCategory[]|null
     */
    public ?array $a_shop_category = null;

    public function __construct(array $data)
    {
        $this->a_shop_category = isset($data['a_shop_category']) ? array_map(static fn($item) => new CategoryGetResponseShopCategory((array)$item), (array)$data['a_shop_category']) : null;
    }
}
