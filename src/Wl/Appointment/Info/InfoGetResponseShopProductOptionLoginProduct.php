<?php
namespace WlSdk\Wl\Appointment\Info;

class InfoGetResponseShopProductOptionLoginProduct
{
    /**
     * Purchased product key.
     *
     * @var string|null
     */
    public ?string $k_login_product = null;

    public function __construct(array $data)
    {
        $this->k_login_product = isset($data['k_login_product']) ? (string)$data['k_login_product'] : null;
    }
}
