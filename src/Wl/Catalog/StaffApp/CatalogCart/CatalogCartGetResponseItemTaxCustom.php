<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

class CatalogCartGetResponseItemTaxCustom
{
    /**
     * The tax amount.
     *
     * @var string|null
     */
    public ?string $f_tax = null;

    /**
     * The tax keys.
     *
     * @var string|null
     */
    public ?string $k_tax = null;

    public function __construct(array $data)
    {
        $this->f_tax = isset($data['f_tax']) ? (string)$data['f_tax'] : null;
        $this->k_tax = isset($data['k_tax']) ? (string)$data['k_tax'] : null;
    }
}
