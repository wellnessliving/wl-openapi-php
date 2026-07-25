<?php

namespace WlSdk\Wl\Catalog\Cart;

class CartGetResponseItemConfigRegistrationFeeList
{
    /**
     * Registration fee amount for the tuition participant.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    public function __construct(array $data)
    {
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
    }
}
