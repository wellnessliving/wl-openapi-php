<?php

namespace WlSdk\Wl\Virtual;

class VirtualSchedulePostRequest
{
    /**
     * Class schedule session date.
     *
     * @var string|null
     */
    public ?string $dtu_class_period = null;

    /**
     * Appointment key.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Class schedule key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtu_class_period' => $this->dtu_class_period,
            'k_appointment' => $this->k_appointment,
            'k_class_period' => $this->k_class_period,
            ],
            static fn ($v) => $v !== null
        );
    }
}
