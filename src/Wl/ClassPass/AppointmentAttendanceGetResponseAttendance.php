<?php

namespace WlSdk\Wl\ClassPass;

class AppointmentAttendanceGetResponseAttendance
{
    /**
     * No description.
     *
     * @var array|null
     */
    public ?array $dtu_last_update = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $id_status = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $s_appointment_id = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $s_user_id = null;

    public function __construct(array $data)
    {
        $this->dtu_last_update = isset($data['dtu_last_update']) ? (array)$data['dtu_last_update'] : null;
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
        $this->s_appointment_id = isset($data['s_appointment_id']) ? (string)$data['s_appointment_id'] : null;
        $this->s_user_id = isset($data['s_user_id']) ? (string)$data['s_user_id'] : null;
    }
}
