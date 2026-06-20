<?php
namespace WlSdk\Wl\Catalog\Cart;

class CartGetResponseRewardItem
{
    /**
     * The quantity of sale items.
     *
     * @var int|null
     */
    public ?int $i_quantity = null;

    /**
     * The sale item type, one of the {@link \WlSdk\RsSaleSid} constants.
     *
     * @var int|null
     */
    public ?int $id_sale = null;

    /**
     * Whether selected login prize discount applied to item.
     *
     * @var bool|null
     */
    public ?bool $is_login_prize_used = null;

    /**
     * The sale item key.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The shop product option. If `null`, the sale item has no options.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    public function __construct(array $data)
    {
        $this->i_quantity = isset($data['i_quantity']) ? (int)$data['i_quantity'] : null;
        $this->id_sale = isset($data['id_sale']) ? (int)$data['id_sale'] : null;
        $this->is_login_prize_used = isset($data['is_login_prize_used']) ? (bool)$data['is_login_prize_used'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->k_shop_product_option = isset($data['k_shop_product_option']) ? (string)$data['k_shop_product_option'] : null;
    }
}
