<?php
namespace WlSdk\Wl\Catalog\Payment;

/**
 * Response from POST
 */
class PaymentApiPostResponse
{
    /**
     * The key of login activity.
     * 
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_login_activity = null;

    /**
     * The purchase key created during payment.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    public function __construct(array $data)
    {
        $this->k_login_activity = isset($data['k_login_activity']) ? (string)$data['k_login_activity'] : null;
        $this->k_purchase = isset($data['k_purchase']) ? (string)$data['k_purchase'] : null;
    }
}
