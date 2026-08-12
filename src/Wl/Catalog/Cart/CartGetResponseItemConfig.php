<?php

namespace WlSdk\Wl\Catalog\Cart;

class CartGetResponseItemConfig
{
    /**
     * List of tuition events.
     * Each entry has the next structure:
     *
     * @var CartGetResponseItemConfigEventList|null
     */
    public ?CartGetResponseItemConfigEventList $a_event_list = null;

    /**
     * Registration fees for tuition participants.
     * Keys are participant keys.
     * Each value has the next structure:
     *
     * @var CartGetResponseItemConfigRegistrationFeeList|null
     */
    public ?CartGetResponseItemConfigRegistrationFeeList $a_registration_fee_list = null;

    /**
     * The total amount that will be charged for the tuition item when during purchase.
     *
     * @var string|null
     */
    public ?string $m_checkout = null;

    /**
     * The part of the tuition cost that is not charged during purchase.
     *
     * @var string|null
     */
    public ?string $m_deferred = null;

    public function __construct(array $data)
    {
        $this->a_event_list = isset($data['a_event_list']) ? new CartGetResponseItemConfigEventList((array)$data['a_event_list']) : null;
        $this->a_registration_fee_list = isset($data['a_registration_fee_list']) ? new CartGetResponseItemConfigRegistrationFeeList((array)$data['a_registration_fee_list']) : null;
        $this->m_checkout = isset($data['m_checkout']) ? (string)$data['m_checkout'] : null;
        $this->m_deferred = isset($data['m_deferred']) ? (string)$data['m_deferred'] : null;
    }
}
