<?php

namespace WlSdk\Wl\Appointment\Mark;

class MarkPostRequest
{
    /**
     * Appointment key.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Business key.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Appointment status.
     *
     * One of 'attend', 'book', 'confirmed', 'pending' string values.
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $text_status = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'text_status' => $this->text_status,
            ],
            static fn ($v) => $v !== null
        );
    }
}
