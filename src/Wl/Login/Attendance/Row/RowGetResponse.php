<?php

namespace WlSdk\Wl\Login\Attendance\Row;

/**
 * Response from GET
 */
class RowGetResponse
{
    /**
     * Data for a single attendance list row.
     *
     * @var RowGetResponseRow|null
     */
    public ?RowGetResponseRow $a_row = null;

    public function __construct(array $data)
    {
        $this->a_row = isset($data['a_row']) ? new RowGetResponseRow((array)$data['a_row']) : null;
    }
}
