<?php

namespace WlSdk\Wl\Appointment\View;

class ViewStoreGetRequest
{
    /**
     * Appointment primary key in RsAppointmentSql table.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Business primary key in RsBusinessSql table.
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
