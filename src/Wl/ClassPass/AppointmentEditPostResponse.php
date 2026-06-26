<?php

namespace WlSdk\Wl\ClassPass;

/**
 * Response from POST
 */
class AppointmentEditPostResponse
{
    /**
     * Appointment reservation ID.
     *
     * @var string|null
     */
    public ?string $s_appointment_id = null;

    public function __construct(array $data)
    {
        $this->s_appointment_id = isset($data['s_appointment_id']) ? (string)$data['s_appointment_id'] : null;
    }
}
