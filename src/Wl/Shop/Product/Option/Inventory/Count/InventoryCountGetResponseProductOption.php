<?php

namespace WlSdk\Wl\Shop\Product\Option\Inventory\Count;

class InventoryCountGetResponseProductOption
{
    /**
     * Information about the product option image:
     *
     * @var InventoryCountGetResponseProductOptionImage|null
     */
    public ?InventoryCountGetResponseProductOptionImage $a_image = null;

    /**
     * The date of the last product inventory change.
     *
     * @var string|null
     */
    public ?string $dl_change = null;

    /**
     * The product option quantity.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the product option in the store.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * The key of the product option inventory in the store.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option_inventory = null;

    /**
     * The title of the store category.
     *
     * @var string|null
     */
    public ?string $text_category = null;

    /**
     * The location title.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * The product option inventory note.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    /**
     * The product option title.
     *
     * @var string|null
     */
    public ?string $text_option = null;

    /**
     * The product option title.
     *
     * @var string|null
     */
    public ?string $text_product = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new InventoryCountGetResponseProductOptionImage((array)$data['a_image']) : null;
        $this->dl_change = isset($data['dl_change']) ? (string)$data['dl_change'] : null;
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_shop_product_option = isset($data['k_shop_product_option']) ? (string)$data['k_shop_product_option'] : null;
        $this->k_shop_product_option_inventory = isset($data['k_shop_product_option_inventory']) ? (string)$data['k_shop_product_option_inventory'] : null;
        $this->text_category = isset($data['text_category']) ? (string)$data['text_category'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
        $this->text_option = isset($data['text_option']) ? (string)$data['text_option'] : null;
        $this->text_product = isset($data['text_product']) ? (string)$data['text_product'] : null;
    }
}
