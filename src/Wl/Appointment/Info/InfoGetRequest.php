<?php

namespace WlSdk\Wl\Appointment\Info;

class InfoGetRequest
{
    /**
     * Appointment key to get information for.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_appointment' => $this->k_appointment,
            ],
            static fn ($v) => $v !== null
        );
    }
}
