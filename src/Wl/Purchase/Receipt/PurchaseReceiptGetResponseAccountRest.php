<?php

namespace WlSdk\Wl\Purchase\Receipt;

class PurchaseReceiptGetResponseAccountRest
{
    /**
     * The account balance on the user's account.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * The currency of the amount.
     *
     * @var string|null
     */
    public ?string $text_currency = null;

    /**
     * The payment method title.
     *
     * @var string|null
     */
    public ?string $text_method = null;

    public function __construct(array $data)
    {
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
        $this->text_currency = isset($data['text_currency']) ? (string)$data['text_currency'] : null;
        $this->text_method = isset($data['text_method']) ? (string)$data['text_method'] : null;
    }
}
