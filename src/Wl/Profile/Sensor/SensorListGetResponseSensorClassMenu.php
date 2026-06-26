<?php

namespace WlSdk\Wl\Profile\Sensor;

class SensorListGetResponseSensorClassMenu
{
    /**
     * ID of the current button.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * Class for current button.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * Code to execute on button click.
     *
     * @var string|null
     */
    public ?string $s_onclick = null;

    /**
     * Button title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->s_id = isset($data['s_id']) ? (string)$data['s_id'] : null;
        $this->s_class = isset($data['s_class']) ? (string)$data['s_class'] : null;
        $this->s_onclick = isset($data['s_onclick']) ? (string)$data['s_onclick'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
