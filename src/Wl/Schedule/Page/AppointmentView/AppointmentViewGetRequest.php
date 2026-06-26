<?php

namespace WlSdk\Wl\Schedule\Page\AppointmentView;

class AppointmentViewGetRequest
{
    /**
     * Appointment key. Primary key in RsAppointmentSql table.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Business key. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
