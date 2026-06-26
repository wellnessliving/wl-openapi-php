<?php

namespace WlSdk\Wl\Appointment\WaitList;

/**
 * Response from GET
 */
class AppointmentWaitListGetResponse
{
    /**
     * Information about the appointment. Has next structure:
     *
     * @var AppointmentWaitListGetResponseAppointment|null
     */
    public ?AppointmentWaitListGetResponseAppointment $a_appointment = null;

    /**
     * List of visits in wait list. Each element has next structure:
     *
     * @var AppointmentWaitListGetResponseWait[]|null
     */
    public ?array $a_wait = null;

    /**
     * Whether or not to send email notification.
     *
     * `true` - enable check-in by email;
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * Whether or not to send push notification.
     *
     * `true` - enable check-in by push;
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_push = null;

    /**
     * Whether or not to send SMS notification.
     *
     * `true` - enable check-in by sms;
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_sms = null;

    public function __construct(array $data)
    {
        $this->a_appointment = isset($data['a_appointment']) ? new AppointmentWaitListGetResponseAppointment((array)$data['a_appointment']) : null;
        $this->a_wait = isset($data['a_wait']) ? array_map(static fn ($item) => new AppointmentWaitListGetResponseWait((array)$item), (array)$data['a_wait']) : null;
        $this->is_mail = isset($data['is_mail']) ? (bool)$data['is_mail'] : null;
        $this->is_push = isset($data['is_push']) ? (bool)$data['is_push'] : null;
        $this->is_sms = isset($data['is_sms']) ? (bool)$data['is_sms'] : null;
    }
}
