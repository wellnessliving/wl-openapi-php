<?php
namespace WlSdk\Wl\Appointment\Book\Payment;

/**
 * Response from POST
 */
class PaymentMultipleApiPostResponse
{
    /**
     * The list of redeemed prizes.
     *
     * @var string[]|null
     */
    public ?array $a_login_prize = null;

    /**
     * The payment type for the appointment. One of the
     * [RsAppointmentPaySid](#/components/schemas/RsAppointmentPaySid) constants.
     *
     * @var int[]|null
     */
    public ?array $a_pay = null;

    /**
     * The keys of purchased items.
     * 
     * The first level of the array is the list of appointments from the batch.
     * The second level of the array is the list of items purchased for this appointment.
     *
     * @var string[][]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * Key of the activity for the purchase made. This will be empty if no purchase has been made.
     *
     * @var string|null
     */
    public ?string $k_login_activity_purchase = null;

    public function __construct(array $data)
    {
        $this->a_login_prize = isset($data['a_login_prize']) ? (array)$data['a_login_prize'] : null;
        $this->a_pay = isset($data['a_pay']) ? (array)$data['a_pay'] : null;
        $this->a_purchase_item = isset($data['a_purchase_item']) ? (array)$data['a_purchase_item'] : null;
        $this->k_login_activity_purchase = isset($data['k_login_activity_purchase']) ? (string)$data['k_login_activity_purchase'] : null;
    }
}
