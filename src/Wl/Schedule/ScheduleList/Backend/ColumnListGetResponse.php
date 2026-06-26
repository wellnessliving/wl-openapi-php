<?php

namespace WlSdk\Wl\Schedule\ScheduleList\Backend;

/**
 * Response from GET
 */
class ColumnListGetResponse
{
    /**
     * Column list.
     * Each element has next structure:
     *
     * @var ColumnListGetResponseColumn|null
     */
    public ?ColumnListGetResponseColumn $a_column = null;

    public function __construct(array $data)
    {
        $this->a_column = isset($data['a_column']) ? new ColumnListGetResponseColumn((array)$data['a_column']) : null;
    }
}
