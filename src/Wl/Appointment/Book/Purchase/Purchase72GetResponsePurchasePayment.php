<?php

namespace WlSdk\Wl\Appointment\Book\Purchase;

class Purchase72GetResponsePurchasePayment
{
    /**
     * The amount of the whole discount of one purchase item.
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

    public function __construct(array $data)
    {
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_discount_login = isset($data['m_discount_login']) ? (string)$data['m_discount_login'] : null;
    }
}
