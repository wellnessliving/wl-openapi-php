<?php

namespace WlSdk\Wl\Login\Product;

class ProductGetResponseLoginProduct
{
    /**
     * Date and time of purchase in UTC.
     *
     * @var string|null
     */
    public ?string $dtu_purchase = null;

    /**
     * Quantity of the product purchased.
     *
     * @var int|null
     */
    public ?int $i_quantity = null;

    /**
     * Key of product.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * Price per unit of the product.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * Total amount paid for the product.
     *
     * @var string|null
     */
    public ?string $m_total_amount = null;

    /**
     * Location where the purchase was made.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * Name of the purchased product.
     *
     * @var string|null
     */
    public ?string $text_product = null;

    public function __construct(array $data)
    {
        $this->dtu_purchase = isset($data['dtu_purchase']) ? (string)$data['dtu_purchase'] : null;
        $this->i_quantity = isset($data['i_quantity']) ? (int)$data['i_quantity'] : null;
        $this->k_shop_product_option = isset($data['k_shop_product_option']) ? (string)$data['k_shop_product_option'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->m_total_amount = isset($data['m_total_amount']) ? (string)$data['m_total_amount'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->text_product = isset($data['text_product']) ? (string)$data['text_product'] : null;
    }
}
