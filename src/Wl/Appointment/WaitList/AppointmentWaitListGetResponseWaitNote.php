<?php

namespace WlSdk\Wl\Appointment\WaitList;

class AppointmentWaitListGetResponseWaitNote
{
    /**
     * Type of note. One of {@link \WlSdk\Wl\Visit\Note\Sid\NoteSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\Note\Sid\NoteSid
     */
    public ?int $id_note = null;

    /**
     * Icon class for a note by note type.
     *
     * @var string|null
     */
    public ?string $sid_icon = null;

    public function __construct(array $data)
    {
        $this->id_note = isset($data['id_note']) ? (int)$data['id_note'] : null;
        $this->sid_icon = isset($data['sid_icon']) ? (string)$data['sid_icon'] : null;
    }
}
