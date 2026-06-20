<?php
namespace WlSdk\Wl\Appointment\Book\Schedule;

class CalendarGetResponseTimezoneData
{
    /**
     * `null` if business settings doesn't allow client to adjust timezone, otherwise list of timezones:
     *
     * @var CalendarGetResponseTimezoneDataTimezone|null
     */
    public ?CalendarGetResponseTimezoneDataTimezone $a_timezone = null;

    /**
     * `null` if business settings doesn't allow client to adjust timezone, otherwise timezone input name.
     *
     * @var string|null
     */
    public ?string $name = null;

    public function __construct(array $data)
    {
        $this->a_timezone = isset($data['a_timezone']) ? new CalendarGetResponseTimezoneDataTimezone((array)$data['a_timezone']) : null;
        $this->name = isset($data['name']) ? (string)$data['name'] : null;
    }
}
