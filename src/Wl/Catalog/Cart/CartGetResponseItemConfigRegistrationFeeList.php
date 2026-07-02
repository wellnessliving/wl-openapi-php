<?php

namespace WlSdk\Wl\Catalog\Cart;

class CartGetResponseItemConfigRegistrationFeeList
{
    /**
     * Registration fee amount for the tuition participant.
     *
     * @var string|null
     */
    public ?string $m_amount_fee = null;

    public function __construct(array $data)
    {
        $this->m_amount_fee = isset($data['m_amount_fee']) ? (string)$data['m_amount_fee'] : null;
    }
}
