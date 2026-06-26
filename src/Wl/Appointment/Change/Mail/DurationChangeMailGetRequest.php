<?php

namespace WlSdk\Wl\Appointment\Change\Mail;

class DurationChangeMailGetRequest
{
    /**
     * Email template ID from {@link \WlSdk\RsMailSid}.
     *
     * @var int|null
     * @see \WlSdk\RsMailSid
     */
    public ?int $id_mail = null;

    /**
     * Appointment primary key in RsAppointmentSql table. `null` if appointment not set.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mail' => $this->id_mail,
            'k_appointment' => $this->k_appointment,
            ],
            static fn ($v) => $v !== null
        );
    }
}
