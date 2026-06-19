<?php
namespace WlSdk\Wl\Shop\Product\Option\Inventory\Count;

/**
 * Response from GET
 */
class InventoryCountApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_product_option = null;

    /**
     * The current username.
     *
     * @var string|null
     */
    public ?string $text_user_name = null;

    public function __construct(array $data)
    {
        $this->a_product_option = isset($data['a_product_option']) ? (array)$data['a_product_option'] : null;
        $this->text_user_name = isset($data['text_user_name']) ? (string)$data['text_user_name'] : null;
    }
}
