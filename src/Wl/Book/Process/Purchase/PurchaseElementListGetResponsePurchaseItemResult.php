<?php
namespace WlSdk\Wl\Book\Process\Purchase;

class PurchaseElementListGetResponsePurchaseItemResult
{
    /**
     * Information about taxes. The key refers to the tax key, and the value refers to the tax amount.
     *
     * @var string[]|null
     */
    public ?array $a_tax = null;

    /**
     * The ID of purchase item type. One of {@link \WlSdk\RsPurchaseItemSid} constants.
     *
     * @var int|null
     */
    public ?int $id_purchase_item = null;

    /**
     * The key of the purchase item in the database.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The cost of the purchase item (with taxes).
     *
     * @var string|null
     */
    public ?string $m_cost = null;

    /**
     * The amount of the whole discount.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * The amount of the discount for the client type.
     *
     * @var string|null
     */
    public ?string $m_discount_login = null;

    /**
     * The price of the purchase item (with or without taxes, depending on regional standards).
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The amount of taxes for the purchase item.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    public function __construct(array $data)
    {
        $this->a_tax = isset($data['a_tax']) ? (array)$data['a_tax'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->m_cost = isset($data['m_cost']) ? (string)$data['m_cost'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_discount_login = isset($data['m_discount_login']) ? (string)$data['m_discount_login'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
    }
}
