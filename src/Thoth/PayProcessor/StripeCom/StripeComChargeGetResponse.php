<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

/**
 * Response from GET
 */
class StripeComChargeGetResponse
{
    /**
     * Details about the payment method at the time of the transaction:
     *
     * @var StripeComChargeGetResponsePaymentMethodDetails|null
     */
    public ?StripeComChargeGetResponsePaymentMethodDetails $o_payment_method_details = null;

    /**
     * ID of the payment method used in this charge.
     *
     * @var string|null
     */
    public ?string $s_payment_method = null;

    public function __construct(array $data)
    {
        $this->o_payment_method_details = isset($data['o_payment_method_details']) ? new StripeComChargeGetResponsePaymentMethodDetails((array)$data['o_payment_method_details']) : null;
        $this->s_payment_method = isset($data['s_payment_method']) ? (string)$data['s_payment_method'] : null;
    }
}
