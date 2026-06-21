<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetResponseItemTax
{
    /**
     * The calculated tax amount applied by this rule.
     *
     * @var float|null
     */
    public ?float $f_tax = null;

    /**
     * The tax amount after applying all discounts.
     *
     * @var string|null
     */
    public ?string $f_tax_discount = null;

    /**
     * The tax amount after applying the client type discount only.
     *
     * @var string|null
     */
    public ?string $f_tax_discount_login = null;

    /**
     * The tax rate. Its meaning depends on `id_tax`.
     *
     * @var float|null
     */
    public ?float $f_value = null;

    /**
     * The tax type. One of {@link \WlSdk\RsTaxSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsTaxSid
     */
    public ?int $id_tax = null;

    /**
     * The tax key.
     *
     * @var string|null
     */
    public ?string $k_tax = null;

    /**
     * The tax name.
     *
     * @var string|null
     */
    public ?string $s_tax = null;

    public function __construct(array $data)
    {
        $this->f_tax = isset($data['f_tax']) ? (float)$data['f_tax'] : null;
        $this->f_tax_discount = isset($data['f_tax_discount']) ? (string)$data['f_tax_discount'] : null;
        $this->f_tax_discount_login = isset($data['f_tax_discount_login']) ? (string)$data['f_tax_discount_login'] : null;
        $this->f_value = isset($data['f_value']) ? (float)$data['f_value'] : null;
        $this->id_tax = isset($data['id_tax']) ? (int)$data['id_tax'] : null;
        $this->k_tax = isset($data['k_tax']) ? (string)$data['k_tax'] : null;
        $this->s_tax = isset($data['s_tax']) ? (string)$data['s_tax'] : null;
    }
}
