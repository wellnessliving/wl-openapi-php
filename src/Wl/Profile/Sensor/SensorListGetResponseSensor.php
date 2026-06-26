<?php

namespace WlSdk\Wl\Profile\Sensor;

class SensorListGetResponseSensor
{
    /**
     * Menu data with structure:
     *
     * @var SensorListGetResponseSensorClassMenu|null
     */
    public ?SensorListGetResponseSensorClassMenu $a_class_menu = null;

    /**
     * Sensor id.
     *
     * @var string|null
     */
    public ?string $s_sensor = null;

    /**
     * Id name for sensor menu button.
     *
     * @var string|null
     */
    public ?string $s_id_sensor = null;

    /**
     * Sensor name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    public function __construct(array $data)
    {
        $this->a_class_menu = isset($data['a_class_menu']) ? new SensorListGetResponseSensorClassMenu((array)$data['a_class_menu']) : null;
        $this->s_sensor = isset($data['s_sensor']) ? (string)$data['s_sensor'] : null;
        $this->s_id_sensor = isset($data['s_id_sensor']) ? (string)$data['s_id_sensor'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
    }
}
