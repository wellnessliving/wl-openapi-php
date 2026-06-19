<?php
namespace WlSdk\Wl\Shop\Category;

/**
 * Response from POST
 */
class CategoryApiPostResponse
{
    /**
     * Key of the created shop category.
     *
     * @var string|null
     */
    public ?string $k_shop_category = null;

    public function __construct(array $data)
    {
        $this->k_shop_category = isset($data['k_shop_category']) ? (string)$data['k_shop_category'] : null;
    }
}
