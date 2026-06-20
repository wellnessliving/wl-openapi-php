<?php

namespace WlSdk\Wl\Catalog\Cart;

class CartGetResponseItem
{
    /**
     * The client prorate date. This will be `null` in cases where the client prorate date hasn't passed.
     *
     * @var string|null
     */
    public ?string $dl_client_prorate = null;

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
     * @see \WlSdk\RsSaleSid
     */
    public ?int $id_sale = null;

    /**
     * The sale item key.
     *   Note:
     *
     *      You need to specify the product option key in the `k_shop_product_option` field or the first available
     *          option will be used automatically.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Key of login prize used on item.
     *
     * @var string|null
     */
    public ?string $k_login_prize = null;

    /**
     * Note:
     *      Used for products only `id_sale` = {@link \WlSdk\RsSaleSid}.
     *      If empty the first available option will be used automatically.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    public function __construct(array $data)
    {
        $this->dl_client_prorate = isset($data['dl_client_prorate']) ? (string)$data['dl_client_prorate'] : null;
        $this->i_quantity = isset($data['i_quantity']) ? (int)$data['i_quantity'] : null;
        $this->id_sale = isset($data['id_sale']) ? (int)$data['id_sale'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->k_login_prize = isset($data['k_login_prize']) ? (string)$data['k_login_prize'] : null;
        $this->k_shop_product_option = isset($data['k_shop_product_option']) ? (string)$data['k_shop_product_option'] : null;
    }
}
