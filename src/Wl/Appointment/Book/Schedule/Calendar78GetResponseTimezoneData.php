<?php

namespace WlSdk\Wl\Appointment\Book\Schedule;

class Calendar78GetResponseTimezoneData
{
    /**
     * `null` if business settings doesn't allow client to adjust timezone, otherwise list of timezones:
     *
     * @var Calendar78GetResponseTimezoneDataTimezone|null
     */
    public ?Calendar78GetResponseTimezoneDataTimezone $a_timezone = null;

    /**
     * `null` if business settings doesn't allow client to adjust timezone, otherwise timezone input name.
     *
     * @var string|null
     */
    public ?string $name = null;

    public function __construct(array $data)
    {
        $this->a_timezone = isset($data['a_timezone']) ? new Calendar78GetResponseTimezoneDataTimezone((array)$data['a_timezone']) : null;
        $this->name = isset($data['name']) ? (string)$data['name'] : null;
    }
}
