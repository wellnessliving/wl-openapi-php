<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Service;

/**
 * Response from GET
 */
class ScheduleListServiceGetResponse
{
    /**
     * List of appointment services. Keys - service IDs; primary key in RsServiceSql table. Values - service title.
     *
     * @var array[]|null
     */
    public ?array $a_service = null;

    public function __construct(array $data)
    {
        $this->a_service = isset($data['a_service']) ? (array)$data['a_service'] : null;
    }
}
