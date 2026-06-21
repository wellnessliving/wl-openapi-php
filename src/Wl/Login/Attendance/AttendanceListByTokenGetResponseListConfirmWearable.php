<?php

namespace WlSdk\Wl\Login\Attendance;

class AttendanceListByTokenGetResponseListConfirmWearable
{
    /**
     * Device type ID. One of {@link \WlSdk\Wl\Profile\Sensor\SensorTypesSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Profile\Sensor\SensorTypesSid
     */
    public ?int $id_type = null;

    /**
     * `true` if the device has been removed.
     *
     * @var bool|null
     */
    public ?bool $is_remove = null;

    /**
     * Sensor identifier. Also used as the array key.
     *
     * @var string|null
     */
    public ?string $s_sensor = null;

    /**
     * Device name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->id_type = isset($data['id_type']) ? (int)$data['id_type'] : null;
        $this->is_remove = isset($data['is_remove']) ? (bool)$data['is_remove'] : null;
        $this->s_sensor = isset($data['s_sensor']) ? (string)$data['s_sensor'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
