<?php

namespace WlSdk\Wl\Catalog\Payment;

/**
 * Response from POST
 */
class PaymentPostResponse
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

    /**
     * The temporary token that gives access to the receipt of the purchase without a login.
     *
     * It is returned together with {@link \WlSdk\Wl\Catalog\Payment\PaymentPostResponse::$k_purchase}. Pass it as
     * {@link \WlSdk\Wl\Purchase\Receipt\PurchaseReceipt}
     * to `get()`: this lets a guest, who has no access to the purchase, view the receipt. The
     * token is valid for one hour. An empty string if no purchase was created, or if the token could not be made:
     * the
     * payment does not fail then.
     *
     * @var string|null
     */
    public ?string $text_receipt_token = null;

    public function __construct(array $data)
    {
        $this->k_login_activity = isset($data['k_login_activity']) ? (string)$data['k_login_activity'] : null;
        $this->k_purchase = isset($data['k_purchase']) ? (string)$data['k_purchase'] : null;
        $this->text_receipt_token = isset($data['text_receipt_token']) ? (string)$data['text_receipt_token'] : null;
    }
}
