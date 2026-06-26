<?php

namespace WlSdk\Wl\Appointment\WaitList;

class AppointmentWaitListGetResponseWaitAddon
{
    /**
     * Key of the shop product option. Primary key from RsShopProductOptionSql table.
     *
     * @var string|null
     */
    public ?string $k_shop_product_options = null;

    /**
     * Title of the product.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_shop_product_options = isset($data['k_shop_product_options']) ? (string)$data['k_shop_product_options'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
