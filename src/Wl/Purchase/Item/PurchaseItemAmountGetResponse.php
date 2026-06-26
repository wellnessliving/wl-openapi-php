<?php

namespace WlSdk\Wl\Purchase\Item;

/**
 * Response from GET
 */
class PurchaseItemAmountGetResponse
{
    /**
     * Whether purchase item is out of stock.
     *
     * @var bool|null
     */
    public ?bool $is_out_of_stock = null;

    /**
     * Amount of discounts applied to the purchase item.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * Amount of all units of the purchase item without taxes and discounts.
     *
     * @var string|null
     */
    public ?string $m_subtotal = null;

    /**
     * Amount of all taxes applied to the purchase item.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    /**
     * Total amount of the purchase item.
     *
     * @var string|null
     */
    public ?string $m_total = null;

    public function __construct(array $data)
    {
        $this->is_out_of_stock = isset($data['is_out_of_stock']) ? (bool)$data['is_out_of_stock'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_subtotal = isset($data['m_subtotal']) ? (string)$data['m_subtotal'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
    }
}
