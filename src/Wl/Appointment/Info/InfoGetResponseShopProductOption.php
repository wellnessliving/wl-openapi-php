<?php
namespace WlSdk\Wl\Appointment\Info;

class InfoGetResponseShopProductOption
{
    /**
     * List of purchased product keys. Empty if no products were purchased. Each element:
     *
     * @var InfoGetResponseShopProductOptionLoginProduct|null
     */
    public ?InfoGetResponseShopProductOptionLoginProduct $a_login_product = null;

    /**
     * Deprecated, always `null`.
     *
     * @var string|null
     */
    public ?string $k_login_product = null;

    /**
     * Primary key of add-on.
     *
     * @var string|null
     */
    public ?string $k_shop_product = null;

    /**
     * Add-on option.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * Price that it adds to an appointment.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    public function __construct(array $data)
    {
        $this->a_login_product = isset($data['a_login_product']) ? new InfoGetResponseShopProductOptionLoginProduct((array)$data['a_login_product']) : null;
        $this->k_login_product = isset($data['k_login_product']) ? (string)$data['k_login_product'] : null;
        $this->k_shop_product = isset($data['k_shop_product']) ? (string)$data['k_shop_product'] : null;
        $this->k_shop_product_option = isset($data['k_shop_product_option']) ? (string)$data['k_shop_product_option'] : null;
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
    }
}
