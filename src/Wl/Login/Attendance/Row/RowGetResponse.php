<?php

namespace WlSdk\Wl\Login\Attendance\Row;

/**
 * Response from GET
 */
class RowGetResponse
{
    /**
     * Service image.
     *
     * @var array|null
     */
    public ?array $a_row = null;

    public function __construct(array $data)
    {
        $this->a_row = isset($data['a_row']) ? (array)$data['a_row'] : null;
    }
}
