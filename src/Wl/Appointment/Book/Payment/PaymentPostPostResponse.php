<?php

namespace WlSdk\Wl\Appointment\Book\Payment;

/**
 * Response from POST
 */
class PaymentPostPostResponse
{
    /**
     * The purchase item keys from the database.
     *
     * This will be `null` if not set yet.
     *
     * @var string[]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * The payment type for the appointment. A constant of {@link \WlSdk\RsAppointmentPaySid}.
     *
     * @var int|null
     * @see \WlSdk\RsAppointmentPaySid
     */
    public ?int $id_pay = null;

    /**
     * The key of activity of the purchase made.
     * Empty if no purchase has been made.
     *
     * @var string|null
     */
    public ?string $k_login_activity_purchase = null;

    /**
     * Login prize key. In case when appointment paid by reward prize, there is the key of redeemed login prize.
     * Empty otherwise.
     *
     * @var string|null
     */
    public ?string $k_login_prize = null;

    public function __construct(array $data)
    {
        $this->a_purchase_item = isset($data['a_purchase_item']) ? (array)$data['a_purchase_item'] : null;
        $this->id_pay = isset($data['id_pay']) ? (int)$data['id_pay'] : null;
        $this->k_login_activity_purchase = isset($data['k_login_activity_purchase']) ? (string)$data['k_login_activity_purchase'] : null;
        $this->k_login_prize = isset($data['k_login_prize']) ? (string)$data['k_login_prize'] : null;
    }
}
