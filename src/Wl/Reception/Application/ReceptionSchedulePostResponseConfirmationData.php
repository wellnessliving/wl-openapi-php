<?php
namespace WlSdk\Wl\Reception\Application;

class ReceptionSchedulePostResponseConfirmationData
{
    /**
     * Data for the promotion payment informational card. Each element contains:
     *
     * @var ReceptionSchedulePostResponseConfirmationDataPayment|null
     */
    public ?ReceptionSchedulePostResponseConfirmationDataPayment $a_payment = null;

    /**
     * The list of assets reserved individually at the time of booking containing:
     *
     * @var ReceptionSchedulePostResponseConfirmationDataResourcesNotShared|null
     */
    public ?ReceptionSchedulePostResponseConfirmationDataResourcesNotShared $a_resources_not_shared = null;

    /**
     * The promotion renewal date in local time.
     *
     * @var string|null
     */
    public ?string $dl_renew = null;

    /**
     * The total workouts attended.
     *
     * @var int|null
     */
    public ?int $i_visits = null;

    /**
     * The short format of the promotion expiration date.
     *
     * @var string|null
     */
    public ?string $s_expire = null;

    /**
     * The payment method used to book (free, unpaid, single buy, or promotion name).
     *
     * @var string|null
     */
    public ?string $s_payment = null;

    /**
     * The short format of the promotion renewal date.
     *
     * @var string|null
     */
    public ?string $s_renew = null;

    /**
     * Determines whether to show the client's total workouts attended on the confirmation screen.
     *
     * @var string|null
     */
    public ?string $show_visits = null;

    public function __construct(array $data)
    {
        $this->a_payment = isset($data['a_payment']) ? new ReceptionSchedulePostResponseConfirmationDataPayment((array)$data['a_payment']) : null;
        $this->a_resources_not_shared = isset($data['a_resources_not_shared']) ? new ReceptionSchedulePostResponseConfirmationDataResourcesNotShared((array)$data['a_resources_not_shared']) : null;
        $this->dl_renew = isset($data['dl_renew']) ? (string)$data['dl_renew'] : null;
        $this->i_visits = isset($data['i_visits']) ? (int)$data['i_visits'] : null;
        $this->s_expire = isset($data['s_expire']) ? (string)$data['s_expire'] : null;
        $this->s_payment = isset($data['s_payment']) ? (string)$data['s_payment'] : null;
        $this->s_renew = isset($data['s_renew']) ? (string)$data['s_renew'] : null;
        $this->show_visits = isset($data['show_visits']) ? (string)$data['show_visits'] : null;
    }
}
