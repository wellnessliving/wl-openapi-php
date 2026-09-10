<?php

namespace WlSdk\Wl\Appointment\Cancel;

class ConfirmGetResponseAppointmentList
{
    /**
     * Appointment start date.
     *
     * @var string|null
     */
    public ?string $dtl_start = null;

    /**
     * Appointment key.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Staff name.
     *
     * @var string|null
     */
    public ?string $text_staff = null;

    public function __construct(array $data)
    {
        $this->dtl_start = isset($data['dtl_start']) ? (string)$data['dtl_start'] : null;
        $this->k_appointment = isset($data['k_appointment']) ? (string)$data['k_appointment'] : null;
        $this->text_staff = isset($data['text_staff']) ? (string)$data['text_staff'] : null;
    }
}
