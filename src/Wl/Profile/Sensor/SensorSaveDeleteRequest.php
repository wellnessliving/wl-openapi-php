<?php

namespace WlSdk\Wl\Profile\Sensor;

class SensorSaveDeleteRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Sensor ID.
     *
     * @var string|null
     */
    public ?string $s_sensor = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_sensor' => $this->s_sensor,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
