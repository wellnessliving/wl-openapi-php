<?php

namespace WlSdk\Wl\Profile\Sensor;

/**
 * Response from POST
 */
class SensorSavePostResponse
{
    /**
     * Page number.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    public function __construct(array $data)
    {
        $this->i_page = isset($data['i_page']) ? (int)$data['i_page'] : null;
    }
}
