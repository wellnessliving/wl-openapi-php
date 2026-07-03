<?php

namespace WlSdk\Wl\Appointment\Edit;

class AddonUpdateGetRequest
{
    /**
     * List of user keys to get add-ons for. Not empty only when getting add-ons for new appointment
     * ({@link \WlSdk\Wl\Appointment\Edit\AddonUpdate} is null). User key '-1' means walk-in, user key '0' means
     * new user
     * (user will be created together with appointment).
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

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
     * Location key.
     * Not empty only when getting add-ons for new appointment ({@link \WlSdk\Wl\Appointment\Edit\AddonUpdate} is
     * null).
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Service key.
     * Not empty only when getting add-ons for new appointment ({@link \WlSdk\Wl\Appointment\Edit\AddonUpdate} is
     * null).
     *
     * @var string|null
     */
    public ?string $k_service = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_uid' => $this->a_uid,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            ],
            static fn ($v) => $v !== null
        );
    }
}
