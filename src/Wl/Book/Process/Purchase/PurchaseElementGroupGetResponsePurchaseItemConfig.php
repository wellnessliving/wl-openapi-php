<?php

namespace WlSdk\Wl\Book\Process\Purchase;

class PurchaseElementGroupGetResponsePurchaseItemConfig
{
    /**
     * List of tuition events, one entry per participant and event class.
     *      Each entry has the next structure:
     *
     * @var PurchaseElementGroupGetResponsePurchaseItemConfigEventList|null
     */
    public ?PurchaseElementGroupGetResponsePurchaseItemConfigEventList $a_event_list = null;

    /**
     * Registration fees, keyed by participant key.
     *
     *      Filled by the server, never accepted from the caller in this flow.
     *      Each value has the next structure:
     *
     * @var PurchaseElementGroupGetResponsePurchaseItemConfigRegistrationFeeList|null
     */
    public ?PurchaseElementGroupGetResponsePurchaseItemConfigRegistrationFeeList $a_registration_fee_list = null;

    /**
     * The amount charged for this tuition right now, including tax. The sum of
     *      `m_checkout` of every its event and registration fee.
     *
     * @var string|null
     */
    public ?string $m_checkout = null;

    /**
     * The amount that is not charged right now, including tax. Together with
     *      `m_checkout` it adds up to the full cost of this tuition.
     *
     * @var string|null
     */
    public ?string $m_deferred = null;

    public function __construct(array $data)
    {
        $this->a_event_list = isset($data['a_event_list']) ? new PurchaseElementGroupGetResponsePurchaseItemConfigEventList((array)$data['a_event_list']) : null;
        $this->a_registration_fee_list = isset($data['a_registration_fee_list']) ? new PurchaseElementGroupGetResponsePurchaseItemConfigRegistrationFeeList((array)$data['a_registration_fee_list']) : null;
        $this->m_checkout = isset($data['m_checkout']) ? (string)$data['m_checkout'] : null;
        $this->m_deferred = isset($data['m_deferred']) ? (string)$data['m_deferred'] : null;
    }
}
