<?php

namespace WlSdk\Wl\Profile\Sensor;

class SensorSavePostRequest
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

    /**
     * Sensor type id, one of {@link \WlSdk\Wl\Profile\Sensor\SensorTypesSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Profile\Sensor\SensorTypesSid
     */
    public ?int $id_sensor_type = null;

    /**
     * `true` if editing sensor, `false` if adding.
     *
     * @var bool|null
     */
    public ?bool $is_edit = null;

    /**
     * Old sensor ID before editing.
     *
     * @var string|null
     */
    public ?string $s_old_sensor = null;

    /**
     * Sensor name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_sensor' => $this->s_sensor,
            'uid' => $this->uid,
            'id_sensor_type' => $this->id_sensor_type,
            'is_edit' => $this->is_edit,
            's_old_sensor' => $this->s_old_sensor,
            'text_name' => $this->text_name,
            ],
            static fn ($v) => $v !== null
        );
    }
}
