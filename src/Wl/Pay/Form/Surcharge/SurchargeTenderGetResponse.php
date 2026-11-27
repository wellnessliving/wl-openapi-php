<?php

namespace WlSdk\Wl\Pay\Form\Surcharge;

/**
 * Response from GET
 */
class SurchargeTenderGetResponse
{
    /**
     * Whether a surcharge is allowed for the card identified by
     * {@link \WlSdk\Thoth\WlPay\Form\Surcharge\SurchargeTender} or {@link
     * \WlSdk\Thoth\WlPay\Form\Surcharge\SurchargeTender}.
     *
     * `true` whenever the business's processor is not subject to the rule, or the rule does not apply to this
     * country/pay method - exactly the same meaning as "do not suppress", never a stand-in for "lookup failed".
     *
     * @var bool|null
     */
    public ?bool $is_allowed = null;

    /**
     * The surcharge of the payment of {@link \WlSdk\Thoth\WlPay\Form\Surcharge\SurchargeTender} with this card,
     * calculated by the server with
     * the configuration of the business: the one place that calculates it.
     *
     * `0.00` if the surcharge is not allowed for the card, or the business has no surcharge of the card. `null` if
     * the
     * amount was not given. The payment may cut it to the maximum that the processor allows, which the processor
     * tells only
     * with the payment method attached to the payment: the total that the payment returns is the amount to charge.
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

    public function __construct(array $data)
    {
        $this->is_allowed = isset($data['is_allowed']) ? (bool)$data['is_allowed'] : null;
        $this->m_surcharge = isset($data['m_surcharge']) ? (string)$data['m_surcharge'] : null;
    }
}
