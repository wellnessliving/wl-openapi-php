<?php

namespace WlSdk\Wl\ClassPass;

class AppointmentEditPatchRequest
{
    /**
     * Appointment reservation ID.
     *
     * @var string|null
     */
    public ?string $s_appointment_id = null;

    /**
     * Partner ID.
     *
     * @var string|null
     */
    public ?string $s_partner_id = null;

    /**
     * Venue ID.
     *
     * @var string|null
     */
    public ?string $s_venue_id = null;

    /**
     * Visit status.
     *
     * @var int|null
     * @see \WlSdk\Wl\ClassPass\ReservationStatusSid
     */
    public ?int $id_status = null;

    /**
     * Some custom string for any additional information.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    public function params(): array
    {
        return array_filter(
            [
            's_appointment_id' => $this->s_appointment_id,
            's_partner_id' => $this->s_partner_id,
            's_venue_id' => $this->s_venue_id,
            'id_status' => $this->id_status,
            'text_note' => $this->text_note,
            ],
            static fn ($v) => $v !== null
        );
    }
}
