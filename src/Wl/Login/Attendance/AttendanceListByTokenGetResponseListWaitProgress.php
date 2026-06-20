<?php

namespace WlSdk\Wl\Login\Attendance;

class AttendanceListByTokenGetResponseListWaitProgress
{
    /**
     * Field ID. One of the {@link \WlSdk\Wl\Member\Progress\Field\ProgressFieldSid}.
     *
     * @var int|null
     */
    public ?int $id_field = null;

    /**
     * Field measurement unit ID. One of the {@link \WlSdk\Wl\Member\Progress\Field\MeasurementSid} constants.
     *
     * @var int|null
     */
    public ?int $id_measurement_unit = null;

    /**
     * Field type ID. One of the {@link \WlSdk\Wl\Member\Progress\Field\TypeSid} constants.
     *
     * @var int|null
     */
    public ?int $id_type = null;

    /**
     * Field key.
     *
     * @var string|null
     */
    public ?string $k_field = null;

    /**
     * Progress field log value.
     *
     * @var string|null
     */
    public ?string $x_value = null;

    /**
     * Translated field name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    public function __construct(array $data)
    {
        $this->id_field = isset($data['id_field']) ? (int)$data['id_field'] : null;
        $this->id_measurement_unit = isset($data['id_measurement_unit']) ? (int)$data['id_measurement_unit'] : null;
        $this->id_type = isset($data['id_type']) ? (int)$data['id_type'] : null;
        $this->k_field = isset($data['k_field']) ? (string)$data['k_field'] : null;
        $this->x_value = isset($data['x_value']) ? (string)$data['x_value'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
    }
}
