<?php

namespace WlSdk\Wl\Appointment\Book\Finish;

class FinishPostResponseAppointment
{
    /**
     * The appointment key.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    public function __construct(array $data)
    {
        $this->k_appointment = isset($data['k_appointment']) ? (string)$data['k_appointment'] : null;
    }
}
