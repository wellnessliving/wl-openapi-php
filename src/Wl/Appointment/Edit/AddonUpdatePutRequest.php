<?php

namespace WlSdk\Wl\Appointment\Edit;

class AddonUpdatePutRequest
{
    /**
     * The appointment key.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * The business key. This will be an empty string if not set yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * No description.
     *
     * @var array|null
     */
    public ?array $a_addon = null;

    /**
     * Determines whether the appointment duration needs to be updated.
     *
     * @var bool|null
     */
    public ?bool $is_duration_update = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'a_addon' => $this->a_addon,
            'is_duration_update' => $this->is_duration_update,
            ],
            static fn ($v) => $v !== null
        );
    }
}
