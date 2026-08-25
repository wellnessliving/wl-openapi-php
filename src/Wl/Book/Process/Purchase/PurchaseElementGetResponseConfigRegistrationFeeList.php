<?php

namespace WlSdk\Wl\Book\Process\Purchase;

class PurchaseElementGetResponseConfigRegistrationFeeList
{
    /**
     * Discounts applied to the fee, `null` if there are none. Rows have the same keys as in
     * `a_event_list`.
     *
     * @var array[]|null
     */
    public ?array $a_discount = null;

    /**
     * Taxes of the fee. Keys are tax keys, values are tax amounts.
     *
     * @var string[]|null
     */
    public ?array $a_tax = null;

    /**
     * Registration fee amount for the participant, before discount and tax.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * The amount charged for this fee right now, including tax. A fee is either charged in
     * full or deferred entirely, so `null` means the whole fee is deferred.
     *
     * @var string|null
     */
    public ?string $m_checkout = null;

    /**
     * The whole fee amount if the fee is deferred, `0.00` if it is charged right now.
     *
     * @var string|null
     */
    public ?string $m_deferred = null;

    public function __construct(array $data)
    {
        $this->a_discount = isset($data['a_discount']) ? (array)$data['a_discount'] : null;
        $this->a_tax = isset($data['a_tax']) ? (array)$data['a_tax'] : null;
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
        $this->m_checkout = isset($data['m_checkout']) ? (string)$data['m_checkout'] : null;
        $this->m_deferred = isset($data['m_deferred']) ? (string)$data['m_deferred'] : null;
    }
}
