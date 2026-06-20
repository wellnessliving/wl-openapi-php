<?php

namespace WlSdk\Wl\Appointment\Book\Payment;

class PaymentGetResponsePurchase
{
    /**
     * Contains information about taxes in the following format. A list of taxes to apply.
     * The array keys are `k_tax` keys. Each element contains the following fields:
     *
     * @var PaymentGetResponsePurchaseTax|null
     */
    public ?PaymentGetResponsePurchaseTax $a_tax = null;

    /**
     * The purchase item ID. A constant of {@link \WlSdk\RsPurchaseItemSid}.
     *
     * @var int|null
     */
    public ?int $id_purchase_item = null;

    /**
     * The value of the discount used for the purchase.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The value of the discount used for the purchase.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * The discount amount for the client type of one purchase item.
     *
     * @var string|null
     */
    public ?string $m_discount_login = null;

    /**
     * The payment for the Purchase Option or single visit without taxes.
     *
     * @var string|null
     */
    public ?string $m_pay = null;

    /**
     * The price of the Purchase Option or single visit.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    public function __construct(array $data)
    {
        $this->a_tax = isset($data['a_tax']) ? new PaymentGetResponsePurchaseTax((array)$data['a_tax']) : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_discount_login = isset($data['m_discount_login']) ? (string)$data['m_discount_login'] : null;
        $this->m_pay = isset($data['m_pay']) ? (string)$data['m_pay'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
    }
}
