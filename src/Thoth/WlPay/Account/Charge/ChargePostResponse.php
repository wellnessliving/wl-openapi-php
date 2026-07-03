<?php

namespace WlSdk\Thoth\WlPay\Account\Charge;

/**
 * Response from POST
 */
class ChargePostResponse
{
    /**
     * The ID of the purchase that was created during payment.
     * This value is only returned in cases where a purchase was created.
     * A new purchase is created when {@link \WlSdk\Thoth\WlPay\Account\Charge\Charge} equals {@link
     * \WlSdk\RsPayAccountChargeSid}.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    public function __construct(array $data)
    {
        $this->k_purchase = isset($data['k_purchase']) ? (string)$data['k_purchase'] : null;
    }
}
