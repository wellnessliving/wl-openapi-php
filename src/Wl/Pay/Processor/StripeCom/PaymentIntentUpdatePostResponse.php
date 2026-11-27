<?php

namespace WlSdk\Wl\Pay\Processor\StripeCom;

/**
 * Response from POST
 */
class PaymentIntentUpdatePostResponse
{
    /**
     * Payment amount to set.
     * Required.
     *
     * With {@link \WlSdk\Thoth\PayProcessor\StripeCom\PaymentIntentUpdate} for a business that is under the rule
     * of the surcharge it is
     * the amount without the surcharge, and the answer gives the total with the surcharge decided by the server. A
     * form
     * that posts the model with the answer again, the total in it and the surcharge, gets the same: the posted
     * surcharge
     * is taken off the amount first.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * Surcharge amount to set.
     * Required.
     *
     * With {@link \WlSdk\Thoth\PayProcessor\StripeCom\PaymentIntentUpdate} for a business that is under the rule
     * of the surcharge the
     * posted value is not charged: the surcharge is decided by the server and comes in the answer. The value only
     * tells
     * how much of {@link \WlSdk\Thoth\PayProcessor\StripeCom\PaymentIntentUpdate} is the surcharge of an earlier
     * answer.
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

    public function __construct(array $data)
    {
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
        $this->m_surcharge = isset($data['m_surcharge']) ? (string)$data['m_surcharge'] : null;
    }
}
