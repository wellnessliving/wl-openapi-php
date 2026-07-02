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

    public function __construct(array $data)
    {
        $this->a_event_list = isset($data['a_event_list']) ? new CartGetResponseItemConfigEventList((array)$data['a_event_list']) : null;
        $this->a_registration_fee_list = isset($data['a_registration_fee_list']) ? new CartGetResponseItemConfigRegistrationFeeList((array)$data['a_registration_fee_list']) : null;
    }
}
