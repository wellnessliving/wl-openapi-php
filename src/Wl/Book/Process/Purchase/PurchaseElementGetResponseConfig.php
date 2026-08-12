<?php

namespace WlSdk\Wl\Book\Process\Purchase;

class PurchaseElementGetResponseConfig
{
    /**
     * List of tuition events, one entry per participant and event class.
     * Each entry has the next structure:
     *
     * @var PurchaseElementGetResponseConfigEventList|null
     */
    public ?PurchaseElementGetResponseConfigEventList $a_event_list = null;

    /**
     * Registration fees, keyed by participant key.
     *
     * Filled by the server, never accepted from the caller in this flow.
     * Each value has the next structure:
     *
     * @var PurchaseElementGetResponseConfigRegistrationFeeList|null
     */
    public ?PurchaseElementGetResponseConfigRegistrationFeeList $a_registration_fee_list = null;

    /**
     * The total amount charged for the tuition right now, including tax. The sum of `m_checkout`
     * of every event and every registration fee.
     *
     * @var string|null
     */
    public ?string $m_checkout = null;

    /**
     * The total amount that is not charged right now, including tax. Together with `m_checkout`
     * it adds up to the full cost of the tuition.
     *
     * @var string|null
     */
    public ?string $m_deferred = null;

    public function __construct(array $data)
    {
        $this->a_event_list = isset($data['a_event_list']) ? new PurchaseElementGetResponseConfigEventList((array)$data['a_event_list']) : null;
        $this->a_registration_fee_list = isset($data['a_registration_fee_list']) ? new PurchaseElementGetResponseConfigRegistrationFeeList((array)$data['a_registration_fee_list']) : null;
        $this->m_checkout = isset($data['m_checkout']) ? (string)$data['m_checkout'] : null;
        $this->m_deferred = isset($data['m_deferred']) ? (string)$data['m_deferred'] : null;
    }
}
