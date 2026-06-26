<?php

namespace WlSdk\Wl\Catalog\Coupon\Payment;

/**
 * Response from POST
 */
class PaymentPostResponse
{
    /**
     * ID of purchase that was created during payment.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    public function __construct(array $data)
    {
        $this->k_purchase = isset($data['k_purchase']) ? (string)$data['k_purchase'] : null;
    }
}
