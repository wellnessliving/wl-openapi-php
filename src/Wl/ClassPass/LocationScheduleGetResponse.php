<?php

namespace WlSdk\Wl\ClassPass;

/**
 * Response from GET
 */
class LocationScheduleGetResponse
{
    /**
     * See LocationScheduleListData::toClassPass() for documentation.
     *
     * @var array|null
     */
    public ?array $a_pagination = null;

    /**
     * See LocationScheduleListData::toClassPass() for documentation.
     *
     * @var array|null
     */
    public ?array $a_schedule = null;

    public function __construct(array $data)
    {
        $this->a_pagination = isset($data['a_pagination']) ? (array)$data['a_pagination'] : null;
        $this->a_schedule = isset($data['a_schedule']) ? (array)$data['a_schedule'] : null;
    }
}
