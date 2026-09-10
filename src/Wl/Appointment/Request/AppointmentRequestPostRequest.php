<?php

namespace WlSdk\Wl\Appointment\Request;

class AppointmentRequestPostRequest
{
    /**
     * From where request comes. One of {@link \WlSdk\RsPlaceSid}.
     *
     * @var int|null
     * @see \WlSdk\RsPlaceSid
     */
    public ?int $id_place = null;

    /**
     * Whether to deny the appointment.
     * `true` to deny appointment or `false` to confirm.
     *
     * @var bool|null
     */
    public ?bool $is_deny = null;

    /**
     * Whether all instances of recurring appointment should be denied or approved.
     * `true` if all instances, `false` for only current appointment.
     *
     * @var bool|null
     */
    public ?bool $is_repeat = null;

    /**
     * Appointment key.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_place' => $this->id_place,
            'is_deny' => $this->is_deny,
            'is_repeat' => $this->is_repeat,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
