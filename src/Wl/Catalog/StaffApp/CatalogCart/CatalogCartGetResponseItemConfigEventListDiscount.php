<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

class CatalogCartGetResponseItemConfigEventListDiscount
{
    /**
     * Discount amount of the full event price.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * Output only. The part of this discount that is taken from `m_checkout_subtotal`. A
     *      percentage discount takes its percent of `m_checkout_subtotal` (it is not stacked with the
     *      other discounts), a flat discount is taken in full.
     *
     * @var string|null
     */
    public ?string $m_discount_checkout = null;

    /**
     * Discount title.
     *
     * @var string|null
     */
    public ?string $text_discount = null;

    public function __construct(array $data)
    {
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_discount_checkout = isset($data['m_discount_checkout']) ? (string)$data['m_discount_checkout'] : null;
        $this->text_discount = isset($data['text_discount']) ? (string)$data['text_discount'] : null;
    }
}
