<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

class CatalogCartGetResponseItemConfigRegistrationFeeListDiscount
{
    /**
     * Discount amount.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * Discount title.
     *
     * @var string|null
     */
    public ?string $text_discount = null;

    public function __construct(array $data)
    {
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->text_discount = isset($data['text_discount']) ? (string)$data['text_discount'] : null;
    }
}
