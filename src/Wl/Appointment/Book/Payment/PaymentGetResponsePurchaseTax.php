<?php

namespace WlSdk\Wl\Appointment\Book\Payment;

class PaymentGetResponsePurchaseTax
{
    /**
     * The tax rate.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    /**
     * The name of the tax.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
