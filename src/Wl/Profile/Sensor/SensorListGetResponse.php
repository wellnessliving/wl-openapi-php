<?php

namespace WlSdk\Wl\Profile\Sensor;

/**
 * Response from GET
 */
class SensorListGetResponse
{
    /**
     * `false` if no pages present or pagination data with structure:
     *
     * @var SensorListGetResponsePage[]|null
     */
    public ?array $a_page = null;

    /**
     * Sensors data with structure:
     *
     * @var SensorListGetResponseSensor[]|null
     */
    public ?array $a_sensor = null;

    /**
     * Current page number.
     *
     * @var int|null
     */
    public ?int $i_current_page = null;

    /**
     * Business key. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_page = isset($data['a_page']) ? array_map(static fn ($item) => new SensorListGetResponsePage((array)$item), (array)$data['a_page']) : null;
        $this->a_sensor = isset($data['a_sensor']) ? array_map(static fn ($item) => new SensorListGetResponseSensor((array)$item), (array)$data['a_sensor']) : null;
        $this->i_current_page = isset($data['i_current_page']) ? (int)$data['i_current_page'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
