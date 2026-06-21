<?php

namespace WlSdk\Wl\Shop\Product\Option\Inventory\Count;

/**
 * Response from GET
 */
class InventoryCountGetResponse
{
    /**
     * Information about product options for review or search.
     * Each element contains:
     *
     * @var InventoryCountGetResponseProductOption[]|null
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
        $this->a_product_option = isset($data['a_product_option']) ? array_map(static fn ($item) => new InventoryCountGetResponseProductOption((array)$item), (array)$data['a_product_option']) : null;
        $this->text_user_name = isset($data['text_user_name']) ? (string)$data['text_user_name'] : null;
    }
}
