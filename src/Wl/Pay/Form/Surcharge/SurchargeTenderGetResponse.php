<?php

namespace WlSdk\Wl\Pay\Form\Surcharge;

/**
 * Response from GET
 */
class SurchargeTenderGetResponse
{
    /**
     * Whether a surcharge is allowed for the card identified by {@link
     * \WlSdk\Thoth\WlPay\Form\Surcharge\SurchargeTender} or
     * {@link \WlSdk\Thoth\WlPay\Form\Surcharge\SurchargeTender}.
     *
     * `true` whenever the business's processor is not subject to the rule, or the rule does not apply to this
     * country/pay method - exactly the same meaning as "do not suppress", never a stand-in for "lookup failed".
     *
     * @var bool|null
     */
    public ?bool $is_allowed = null;

    public function __construct(array $data)
    {
        $this->is_allowed = isset($data['is_allowed']) ? (bool)$data['is_allowed'] : null;
    }
}
