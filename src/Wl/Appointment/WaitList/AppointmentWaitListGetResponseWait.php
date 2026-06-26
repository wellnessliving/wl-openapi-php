<?php

namespace WlSdk\Wl\Appointment\WaitList;

class AppointmentWaitListGetResponseWait
{
    /**
     * A list of addons. Each element has next structure:
     *
     * @var AppointmentWaitListGetResponseWaitAddon|null
     */
    public ?AppointmentWaitListGetResponseWaitAddon $a_addon = null;

    /**
     * List of answers for the appointment question. Each element has next structure:
     *
     * @var AppointmentWaitListGetResponseWaitAnswer|null
     */
    public ?AppointmentWaitListGetResponseWaitAnswer $a_answer = null;

    /**
     * List of resources for booked service. Each element has next structure:
     *
     * @var AppointmentWaitListGetResponseWaitResource|null
     */
    public ?AppointmentWaitListGetResponseWaitResource $a_resource = null;

    /**
     * Information for visit note (SOAP and QUICK types):
     *
     * @var AppointmentWaitListGetResponseWaitNote|null
     */
    public ?AppointmentWaitListGetResponseWaitNote $a_note = null;

    /**
     * Information about user:
     *
     * @var AppointmentWaitListGetResponseWaitUser|null
     */
    public ?AppointmentWaitListGetResponseWaitUser $a_user = null;

    /**
     * Local datetime when the visit was booked (in MySQL format).
     *
     * @var string|null
     */
    public ?string $dtl_book = null;

    /**
     * Whether the visit is free. Does not need a pay.
     *
     * @var bool|null
     */
    public ?bool $is_free = null;

    /**
     * Whether the visit is paid.
     *
     * @var bool|null
     */
    public ?bool $is_paid = null;

    /**
     * Whether is awaiting for user confirmation.
     *
     * @var bool|null
     */
    public ?bool $is_wait_confirm = null;

    /**
     * Visit key. Primary key in the RsVisitSql table.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    public function __construct(array $data)
    {
        $this->a_addon = isset($data['a_addon']) ? new AppointmentWaitListGetResponseWaitAddon((array)$data['a_addon']) : null;
        $this->a_answer = isset($data['a_answer']) ? new AppointmentWaitListGetResponseWaitAnswer((array)$data['a_answer']) : null;
        $this->a_resource = isset($data['a_resource']) ? new AppointmentWaitListGetResponseWaitResource((array)$data['a_resource']) : null;
        $this->a_note = isset($data['a_note']) ? new AppointmentWaitListGetResponseWaitNote((array)$data['a_note']) : null;
        $this->a_user = isset($data['a_user']) ? new AppointmentWaitListGetResponseWaitUser((array)$data['a_user']) : null;
        $this->dtl_book = isset($data['dtl_book']) ? (string)$data['dtl_book'] : null;
        $this->is_free = isset($data['is_free']) ? (bool)$data['is_free'] : null;
        $this->is_paid = isset($data['is_paid']) ? (bool)$data['is_paid'] : null;
        $this->is_wait_confirm = isset($data['is_wait_confirm']) ? (bool)$data['is_wait_confirm'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
    }
}
