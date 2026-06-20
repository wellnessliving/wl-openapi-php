<?php
namespace WlSdk\Wl\Profile\Purchase;

class PurchaseElementGetResponseTax
{
    /**
     * The amount of tax.
     *
     * @var string|null
     */
    public ?string $f_tax_discount = null;

    /**
     * The name of the tax.
     *
     * @var string|null
     */
    public ?string $s_tax = null;

    public function __construct(array $data)
    {
        $this->f_tax_discount = isset($data['f_tax_discount']) ? (string)$data['f_tax_discount'] : null;
        $this->s_tax = isset($data['s_tax']) ? (string)$data['s_tax'] : null;
    }
}
