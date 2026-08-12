<?php

namespace WlSdk\Wl\Book\Process\Purchase;

class PurchaseElementGetResponseConfigEventListDiscount
{
    /**
     * Discount rule type. One of {@link \WlSdk\Wl\Discount\DiscountRuleSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Discount\DiscountRuleSid
     */
    public ?int $id_discount_rule = null;

    /**
     * Discount amount of this rule.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * Discount title. Only for {@link \WlSdk\Wl\Discount\DiscountRuleSid}.
     *
     * @var string|null
     */
    public ?string $text_discount = null;

    public function __construct(array $data)
    {
        $this->id_discount_rule = isset($data['id_discount_rule']) ? (int)$data['id_discount_rule'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->text_discount = isset($data['text_discount']) ? (string)$data['text_discount'] : null;
    }
}
